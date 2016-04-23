<?php

namespace App\Providers;

use Bouncer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Bouncer::seeder(function() {
            Bouncer::allow('Admin')->to('');
            Bouncer::allow('Developer')->to('');
            Bouncer::allow('Manager')->to('');
            Bouncer::allow('User')->to('');
            Bouncer::allow('blocked')->to('');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
