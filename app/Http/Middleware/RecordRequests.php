<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Laravel\Pulse\Facades\Pulse;

class RecordRequests
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $machineId = config(
            'pulse.recorders.'
            .\Laravel\Pulse\Recorders\Servers::class.
            '.server_name'
          );
  
        Pulse::record('machine_requests', $machineId, null )
        ->count();

        return $next($request);
    }
}
