<?php

namespace MBozwood\SocketIO;

use ElephantIO\Engine\SocketIO\Version1X;
use ElephantIO\EngineInterface;
use ElephantIO\Exception\ServerConnectionFailureException;

class Socket extends Version1X
{
    public function connect()
    {
        try {
            parent::connect();
        } catch (ServerConnectionFailureException $e) {
            return;
        }
    }
    public function emit($event, array $args = [])
    {
        return $this->write(EngineInterface::MESSAGE, static::EVENT . json_encode([$event, $args]));
    }
}