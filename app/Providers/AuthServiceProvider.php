<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('ordinary_cust', function($user) {
           return $user->is_verified_tutor == 0 or $user->is_verified_tutor == 2;
        });
        
        Gate::define('tutor_cust', function($user) {
            return $user->is_verified_tutor == 1;
         });

    }
}
