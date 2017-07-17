<?php

namespace MBozwood\SocketIO;

use ElephantIO\Client;
use Illuminate\Support\ServiceProvider;

class SocketServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('socket', function() {
            $socket = new Client(new SocketBase(env('SOCKET_URL', 'http://localhost:3000'), []));
            $socket->initialize();
            return $socket;
        });
    }
}
