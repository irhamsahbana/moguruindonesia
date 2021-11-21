<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
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

        //fget data bellow from view composer
        // $incomingOrders = DB::table('orders')->where('tutor_id', Auth::id())->where('status', 'waiting')->count();

        return view('tutor.tutor_dashboard_profile', compact('basicProfile', 'tutorProfile', 'degrees', 'subjects'));
    }

    public function waitingOrders()
    {
        $waitingOrders = DB::table('orders')
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
            ->where('status', 'waiting')->get();

        return view('tutor.course_request', compact('waitingOrders'));
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
