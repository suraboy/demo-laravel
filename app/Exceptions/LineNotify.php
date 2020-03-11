<?php

namespace App\Exceptions;

use Exception;
use KS\Line\LineNotify as Line;

/**
 * Trait LineNotify
 * @package App\Exceptions
 * @author samark chisanguan <samarkchsngn@gmail.com>
 */
trait LineNotify
{

    /**
     * @param \Exception $exception
     */

    public function push($response)
    {
        $line    = new Line(env('LINE_NOTIFY_TOKEN'));
        $message = 'host : ' . $response['config']['url'] . "\r\n";
        $message .= 'message :' . $response['data'] . "\r\n";
        $line->send($message);
    }
}