<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class TutorDashboardComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   
        $incomingOrders =  DB::table('orders')->where('status', 'waiting')->where('tutor_id', Auth::id())->count();
        $view->with('incomingOrders', $incomingOrders);
    }
}