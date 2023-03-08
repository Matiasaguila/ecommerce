<?php

namespace App\Providers;

use App\Listeners\MergeTheCart;
use App\Listeners\MergeTheCartLogout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use illuminate\Auth\Events\Login;
use illuminate\Auth\Events\Logout;
use illuminate\Auth\Events\Failed;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        Login::class => [
            MergeTheCart::class,
        ],
        Logout::class => [
            MergeTheCartLogout::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
