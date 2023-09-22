<?php

namespace App\Http\Middleware;

use App\Helpers\CustomRequest;
use App\Helpers\ErpResponse;
use App\Helpers\ErrorHelper;
use App\Helpers\ResponseHelper;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if(is_null($user)) {
            $response = new ErpResponse();
            $response->setSuccess(false);
            $response->setStatusCode(Response::HTTP_UNAUTHORIZED);
            $response->addError(ErrorHelper::UNAUTHORIZED);
            return $response;
        }

        $user->last_request = now();
        $user->save();

        return $next($request);
    }
}
