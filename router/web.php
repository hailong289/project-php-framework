<?php
use Hola\Routings\Router;
use App\Controllers\HomeController;
Router::get('/', [HomeController::class,'index']);