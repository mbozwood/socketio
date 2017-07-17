<?php

namespace MBozwood\SocketIO;

use Illuminate\Support\Facades\Facade;

class Socket extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'socket';
    }
}
