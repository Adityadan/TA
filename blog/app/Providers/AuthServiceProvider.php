<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('delete-permission',function($user){
        //     return ($user->jabatan=='manajer');
        // });
        // Gate::define('edit-permission',function($user){
        //     return ($user->jabatan=='manajer');
        // });
        // Gate::define('inset-permission',function($user){
        //     return ($user->jabatan=='manajer');
        // });

        
        Gate::define('delete-permission', 'App\Policies\KaryawanPolicy@delete');

        Gate::define('edit-permission', 'App\Policies\KaryawanPolicy@edit');
        Gate::define('viewManajer-permission', 'App\Policies\KaryawanPolicy@view');
        
        Gate::define('viewManajer-permission', function($user) {
            return ($user->jabatan == 'manajer'
                    ? Response::allow()
                    : Response::deny("Kamu harus manajer untuk bisa akses.")
                    );
        });
        
        
    }
}
