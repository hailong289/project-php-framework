<?php
namespace Middleware;
use Hola\Transport\Request;
use Hola\Transport\Response;

class AuthMiddleware {
    // return boolean function
     public function handle(Request $request, Response $response){
         return $response::next($request);
     }
}