<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class BasicAuth
 * @package App\Http\Middleware
 * @author samark chaisanguan <samarkchsngn@gmail.com>
 */
class BasicAuth
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Cache-Control: no-cache, must-revalidate, max-age=0');
        $hasCredentials    = !(empty($_SERVER['PHP_AUTH_USER']) && empty($_SERVER['PHP_AUTH_PW']));
        $isNotAuthenticate = (
            !$hasCredentials ||
            $_SERVER['PHP_AUTH_USER'] != env('AUTH_USER') ||
            $_SERVER['PHP_AUTH_PW'] != env('AUTH_PASS')
        );
        if ($isNotAuthenticate) {
            header('HTTP/1.1 401 Authorization Required');
            header('WWW-Authenticate: Basic realm="Access denied"');
            exit;
        }

        return $next($request);
    }
}


