<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Subject;
use App\Models\User;
use App\Models\tutorProfile;

use File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TutorDashboardController extends Controller
{

    public function profile()
    {
        $basicProfile = User::find(Auth::id());
        $tutorProfile = User::find(Auth::id())->profile()->first();
        $degrees = User::find(Auth::id())->degrees()->get();
        $subjects = User::find(Auth::id())->subjects()->get();

        return view('tutor.tutor_dashboard_profile', compact('basicProfile', 'tutorProfile', 'degrees', 'subjects'));
    }

    public function profileEdit()
    {
        $basicProfile = User::find(Auth::id());
        $tutorProfile = User::find(Auth::id())->profile()->first();
        $degrees = User::find(Auth::id())->degrees()->get();
        $subjects = User::find(Auth::id())->subjects()->get();

        return view('tutor.tutor_dashboard_editProfile', compact('basicProfile', 'tutorProfile', 'degrees', 'subjects'));
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request,[
            'avatar' => 'nullable|image',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'nullable',

            'bank_name' => 'nullable',
            'bank_owner' => 'nullable',
            'bank_account_number' => 'nullable',
        ]);

        $file = $request->file('avatar');
        $old_file = $request->input('old_avatar');

        $user = User::findOrFail(Auth::id());
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $tutorProfile = tutorProfile::where('user_id', $user->id)->first();
        $tutorProfile = tutorProfile::findOrFail($tutorProfile->id);
        $tutorProfile->bank_name = $request->bank_name;
        $tutorProfile->bank_owner = $request->bank_owner;
        $tutorProfile->bank_account_number = $request->bank_account_number;

        if ($file != null && ($request->base64image || $request->base64image != '0')) {
            $image_path = public_path('avatar/'.$old_file );

            if(File::exists($image_path))
                File::delete($image_path);

            $folderPath = public_path('avatar/');
            $filename = time().'_'.$file->getClientOriginalName();
            $filename = str_replace(' ', '_', $filename);

            $user->avatar = $filename;

            $image_parts = explode(";base64,", $request->base64image);
            $image_base64 = base64_decode($image_parts[1]);
            $fileFolder = $folderPath.$filename;
            file_put_contents($fileFolder, $image_base64);
        }

        $user->save();
        $tutorProfile->save();

        return redirect()->back();
    }

    public function ordersByStatus($status)
    {
        $orders = DB::table('orders')
            ->select([
                'orders.id',
                'orders.unique_code',
                'orders.learning_method',
                'orders.start_date',
                'orders.num_meets',
                'orders.num_people',
                'users.first_name',
                'users.last_name',
                'subjects.subject_name',
            ])
            ->leftJoin('users', 'orders.customer_id', '=', 'users.id')
            ->leftJoin('subjects', 'orders.subject_id', '=', 'subjects.id')
            ->where('orders.tutor_id', Auth::id())
            ->where('status', "$status")->get();
        return $orders;
    }

    public function waitingOrders()
    {
        $waitingOrders = $this->ordersByStatus('waiting');

        return view('tutor.course_request', compact('waitingOrders'));
    }

    public function acceptedOrders()
    {
        $acceptedOrders = $this->ordersByStatus('accepted');
        return view('tutor.ongoing_course', compact('acceptedOrders'));
    }

    public function completedOrders()
    {
        $completedOrders = $this->ordersByStatus('completed');

        return view('tutor.history_course', compact('completedOrders'));
    }

    public function orderDetail($slug)
    {
        $order = Order::where('unique_code', $slug)->first();
        $order->customer = User::find($order->customer_id);
        $order->subject = Subject::find($order->subject_id);

        return view('tutor.course_detail', compact('order'));
    }

    public function acceptOrder($slug)
    {
        DB::table('orders')->where('unique_code', $slug)->update(['status' => 'accepted']);

        return redirect()->back();
    }

    public function rejectOrder($slug)
    {
        DB::table('orders')->where('unique_code', $slug)->update(['status' => 'rejected']);

        return redirect()->back();
    }
}
