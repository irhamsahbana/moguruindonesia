<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DirectOrderController extends Controller
{
    public function requestOrder($slug)
    {
        $tutor = DB::table('users')
            ->leftJoin('tutor_profiles', 'users.id', '=', 'tutor_profiles.user_id')
            ->select('users.id AS user_id','users.first_name', 'users.last_name', 'users.slug', 'tutor_profiles.fee_per_session')
            ->where(['users.slug' => $slug])->first();
        
        if(!$tutor){
            abort(404);
        }

        $tutorSubjects = DB::table('tutor_subjects')
            ->leftJoin('subjects', 'tutor_subjects.subject_id', '=', 'subjects.id')
            ->select('tutor_subjects.user_id', 'tutor_subjects.subject_id', 'subjects.subject_name')
            ->where(['tutor_subjects.user_id' => $tutor->user_id])->get();

        return view('customer.reservation_page', compact('tutor', 'tutorSubjects'));
    }

    public function requestOrderPost(Request $request, $slug)
    {
        $this->validate($request, [
            'subject_id' => 'required|integer',
            'start_date' => 'required|date',
            'num_meets' => 'required|integer',
            'num_people' => 'required|integer',
            'learning_method' => 'required|in:offline,online',
            'customer_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required',
            'additional_information' => 'nullable|string',
        ]);

        $startDate = date_create($request->start_date);
        $startDate = date_format($startDate,"Y-m-d");

        $feePerSession = DB::table('tutor_profiles')
            ->select('fee_per_session')
            ->where(['user_id' => DB::table('users')->where(['slug' => $slug])->first()->id])->first()->fee_per_session;

        $fee = $request->num_people > 1 ? $request->num_meets * $feePerSession + (($request->num_people-1) * 100000) : $request->num_meets * $feePerSession;

        $data = [
            'customer_id' => Auth::user()->id,
            'tutor_id' => DB::table('users')->where(['slug' => $slug])->first()->id,
            'subject_id' => $request->subject_id,
            'start_date' => $startDate,
            'num_meets' => $request->num_meets,
            'num_people' => $request->num_people,
            'learning_method' => $request->learning_method,
            'customer_name' => $request->customer_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'additional_information' => $request->additional_information,
            'fee' => $fee
        ];

        return redirect()->route('direct.order.summary', ['slug' => $slug])->withInput($data);
    }

    public function summaryOrder($slug)
    {   
        $subjectName = null;
        if(DB::table('subjects')->where(['id' => old('subject_id')])->first()){
            $subjectName = DB::table('subjects')->where(['id' => old('subject_id')])->first()->subject_name;
        }

        $data = [
            // 'customer_id' => Auth::user()->id,
            // 'tutor_id' => old('tutor_id'),
            // 'subject_id' => old('subject_id'),
            // 'start_date' => old('start_date'),
            // 'num_meets' => old('num_meets'),
            // 'num_people' => old('num_people'),
            // 'learning_method' => old('learning_method'),
            // 'name' => old('name'),
            // 'address' => old('address'),
            // 'phone' => old('phone'),
            // 'addtional_information' => old('addtional_information'),
            // 'fee' => old('fee'),

            'slug' => $slug,
            'subject_name' => $subjectName,
        ];
        return view('customer.checkout', $data);
    }

    public function confirmOrder(Request $request, $slug)
    {
        $this->validate($request, [
            'unique_code' => 'required|string|max:10',
            'subject_id' => 'required|integer',
            'start_date' => 'required|date',
            'num_meets' => 'required|integer',
            'num_people' => 'required|integer',
            'learning_method' => 'required|in:offline,online',
            'customer_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'additional_information' => 'nullable|string',
        ]);

        $feePerSession = DB::table('tutor_profiles')
            ->select('fee_per_session')
            ->where(['user_id' => DB::table('users')->where(['slug' => $slug])->first()->id])->first()->fee_per_session;

        $fee = $request->num_people > 1 ? $request->num_meets * $feePerSession + (($request->num_people-1) * 100000) : $request->num_meets * $feePerSession;

        $additional = [
            'type' => 'direct',
            'status' => 'waiting',
            'customer_id' => Auth::id(),
            'fee' => $fee,
            'created_at' => Carbon::now(),
        ];
        
        DB::table('orders')->insert($request->except('_token') + $additional);
        
        return redirect()->route('direct.order.success', ['slug' => $slug, 'uniqueCode' => $request->unique_code]);
    }

    public function successOrder($slug, $unique_code)
    {
        $order = DB::table('orders')
            ->leftJoin('subjects', 'orders.subject_id', '=', 'subjects.id')
            ->select('orders.id', 'orders.customer_id', 'orders.tutor_id', 'orders.subject_id', 'orders.start_date', 'orders.num_meets', 'orders.num_people', 'orders.learning_method', 'orders.customer_name', 'orders.address', 'orders.phone', 'orders.additional_information', 'orders.fee', 'subjects.subject_name')
            ->where(['orders.unique_code' => $unique_code])->first();

            if(!$order){
                abort(404);
            }

        return view('customer.order_success', compact('order'));
    }
    
}
