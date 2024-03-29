<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('admin', function ($user) {

            // decide if the user is and administrator (return true)
            if (str_ends_with($user->email, '@data4you.cz')) {
                return true;
            }
            // or not (return false)
            else {
                return false;
            }
        });

        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });
    }
}
