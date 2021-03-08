<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequest
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try
        {
            $log = [
                'URI' => $request->getUri(),
                'METHOD' => $request->getMethod(),
                'REQUEST_BODY' => $request->all()
            ];

            Log::channel('reqlog')->info($log);
            return $next($request);
        }
        catch (Exception $e)
        {
            return $next($request);
        }
    }
}
