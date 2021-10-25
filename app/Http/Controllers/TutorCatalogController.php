<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TutorCatalogController extends Controller
{
    public function index()
    {
        $tutors = DB::table('users')
            ->leftJoin('tutor_profiles', 'users.id', '=', 'tutor_profiles.user_id')
            ->select('users.id', 'users.first_name', 'users.last_name', 'users.slug', 'users.is_verified_tutor', 'tutor_profiles.fee_per_session', 'tutor_profiles.bio')->where([
                'users.is_verified_tutor' => 1
            ])->get();

        return view('customer.tutor_catalog', compact('tutors'));
    }

    public function tutorProfile($slug)
    {
        $tutor = DB::table('users')
            ->leftJoin('tutor_profiles', 'users.id', '=', 'tutor_profiles.user_id')
            ->select('users.id AS user_id','users.first_name', 'users.last_name', 'users.address', 'users.phone', 'users.slug', 'tutor_profiles.fee_per_session', 'tutor_profiles.bio', 'tutor_profiles.last_degree_desc',)
            ->where(['users.slug' => $slug])->first();

        $tutorSubjects = DB::table('tutor_subjects')
            ->leftJoin('subjects', 'tutor_subjects.subject_id', '=', 'subjects.id')
            ->select('subjects.subject_name')
            ->where(['user_id' => $tutor->user_id])->get();

        $tutorDegrees = DB::table('tutor_degrees')
        ->leftJoin('degrees', 'tutor_degrees.degree_id', '=', 'degrees.id')
        ->select('degrees.degree_name')
        ->where(['user_id' => $tutor->user_id])->get();

        $slug == Auth::user()->slug ? $userSlug = 'self' : $userSlug = 'others';

        return view('customer.profile_page', compact('userSlug', 'tutor', 'tutorSubjects', 'tutorDegrees'));
    }

    public function tutorProfileEdit(Request $request, $slug)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'nullable',
            'phone' => 'nullable'
        ]);

        $tutorSlug = DB::table('users')
            ->leftJoin('tutor_profiles', 'users.id', '=', 'tutor_profiles.user_id')
            ->select('users.id AS user_id', 'users.slug')
            ->where(['users.slug' => $slug])->first();

        $tutor = DB::table('users')->where(['id' => $tutorSlug->user_id])->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'phone' => $request->phone
        ]);
        
        return redirect()->route('tutor.profile', $tutorSlug->slug);
    }
}
