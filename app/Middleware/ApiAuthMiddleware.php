<?php

namespace App\Middleware;

class ApiAuthMiddleware extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        if (!$this->container->auth->check()) {
            $return = $response->withJson(['msg' => "Please sign in before doing that."], 200)
                ->withHeader('Content-type', 'application/json');

            return $return;
        }

        $response = $next($request, $response);
        return $response;
    }
}
