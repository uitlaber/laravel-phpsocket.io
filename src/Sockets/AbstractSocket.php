<?php

namespace Sanchescom\LaravelSocketIO\Sockets;

use PHPSocketIO\SocketIO;

/**
 * Class AbstractSocket.
 */
abstract class AbstractSocket
{
    /**
     * Listening port.
     *
     * @var int
     */
    protected $port;

    /**
     * Addition options.
     *
     * @var array
     */
    protected $options;

    /**
     * @param SocketIO $socketIO
     *
     * @return void
     */
    abstract public function call(SocketIO $socketIO);

    /**
     * Getting socket port.
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Getting socket options.
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}
