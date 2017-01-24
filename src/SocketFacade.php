<?php

namespace MBozwood\SocketIO;

use Illuminate\Support\Facades\Facade;

class SocketFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'socket';
    }
}
