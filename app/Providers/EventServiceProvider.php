<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Order\OrderCreated' => [
            'App\Listeners\Order\ProcessPayment',
            'App\Listeners\Order\EmptyCart'
        ],
        'App\Events\Product\ProductCreated' => [
            'App\Listeners\Product\ProductCreatedNotifier',
            'App\Listeners\Product\ProductCreatedMailer',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
    }
}