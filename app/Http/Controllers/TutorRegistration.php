<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TutorRegistration extends Controller
{
    public function selectTutorSubjects()
    {
        $subjects = DB::table('subjects')->get();
        $tutorSubjects = DB::table('tutor_subjects')->where('user_id', Auth::id())->get();

        return view('upgrade.step1', compact('subjects', 'tutorSubjects'));
    }

    public function saveSubjectsAndNext(Request $request)
    {
        try {
            if ($request->subjects == null) {
                return redirect()->route('tutor.reg.1');
            }
            DB::beginTransaction();
            DB::table('tutor_subjects')->where('user_id', Auth::id())->delete();
            foreach ($request->subjects as $ts) {
                DB::table('tutor_subjects')->insert([
                    'user_id' => Auth::id(),
                    'subject_id' => $ts,
                    'created_at' => Carbon::now()
                ]);
            }
            DB::commit();

            return redirect()->route('tutor.reg.2');
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e;
        }
    }

    public function selectTutorDegrees()
    {
        $degrees = DB::table('degrees')->get();
        $tutorDegrees = DB::table('tutor_degrees')->where('user_id', Auth::id())->get();
        return view('upgrade.step2', compact('degrees', 'tutorDegrees'));
    }

    public function saveDegreesAndNext(Request $request)
    {
        try {
            if ($request->degrees == null) {
                return redirect()->route('tutor.reg.2');
            }
            DB::beginTransaction();
            DB::table('tutor_degrees')->where('user_id', Auth::id())->delete();
            foreach ($request->degrees as $td) {
                DB::table('tutor_degrees')->insert([
                    'user_id' => Auth::id(),
                    'degree_id' => $td,
                    'created_at' => Carbon::now()
                ]);
            }
            DB::commit();

            return redirect()->route('tutor.reg.3');
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e;
        }
    }

    public function fillTutorBackground()
    {
        $tutorProfiles = DB::table('tutor_profiles')->where('user_id', Auth::id())->first();

        return view('upgrade.step3', compact('tutorProfiles'));
    }

    public function saveBackgroundAndNext(Request $request)
    {
        try {
            if (($request->bio and $request->last_degree_desc) == null) {
                return redirect()->route('tutor.reg.3');
            }
            DB::beginTransaction();
            DB::table('tutor_profiles')->where('user_id', Auth::id())->delete();
            DB::table('tutor_profiles')->insert([
                'user_id' => Auth::id(),
                'bio' => $request->bio,
                'last_degree_desc' => $request->last_degree_desc,
                'created_at' => Carbon::now()
            ]);
            DB::commit();

            return redirect()->route('tutor.reg.4');
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e;
        }
    }

    public function uploadCertAndID()
    {
        return view('upgrade.step4', []);
    }

    public function saveDoc(Request $request)
    {
        $this->validate($request, [
            'id_card' => 'required|file|mimes:jpg,bmp,png,pdf|max:2048',
            'cert' => 'required|file|mimes:jpg,bmp,png,pdf|max:2048'
        ]);

        $idCard = time() . Str::random(15) . '.' . $request->file('id_card')->extension();
        $cert = time() . Str::random(16) . '.' . $request->file('cert')->extension();

        $request->file('id_card')->storeAs('docs', $idCard);
        $request->file('cert')->storeAs('docs', $cert);

        try {
            DB::beginTransaction();
            $user_profiles = DB::table('tutor_profiles')->where('user_id', Auth::id())->first();
            
            if ($user_profiles == null) {
                DB::table('tutor_profiles')->insert([
                    'user_id' => Auth::id(),
                    'id_card' => $idCard,
                    'last_degree_cert' => $cert
                ]);
            } else {
                DB::table('tutor_profiles')->where('user_id', Auth::id())->update([
                    'id_card' => $idCard,
                    'last_degree_cert' => $cert
                ]);

                if (file_exists(storage_path("app/docs/$user_profiles->id_card"))) {
                    unlink(storage_path("app/docs/$user_profiles->id_card"));
                }
                if (file_exists(storage_path("app/docs/$user_profiles->last_degree_cert"))) {
                    unlink(storage_path("app/docs/$user_profiles->last_degree_cert"));
                }
            }
    
            DB::table('users')->where('id', Auth::id())->update(['is_verified_tutor' => 2]);
            DB::commit();
            return redirect()->route('tutor.reg.pending');
        } catch (\Exception $e) {
            DB::rollback();
            echo "<pre>$e</pre>";
        }
    }
}
