<?php

namespace Scaleplan\RocketChat\Exceptions;

use Scaleplan\Http\RemoteResponse;

/**
 * Class RocketChatException
 *
 * @package Scaleplan\RocketChat\Exceptions
 */
class RocketChatException extends \Exception
{
    public const MESSAGE = 'RocketChat integration error.';
    public const CODE = 400;

    /**
     * @var RemoteResponse
     */
    protected $response;

    /**
     * RocketChatException constructor.
     *
     * @param RemoteResponse $response
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct(RemoteResponse $response, $message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message ?: static::MESSAGE, $code ?? static::CODE, $previous);
        $this->response = $response;
    }
}
