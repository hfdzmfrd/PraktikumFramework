<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class MyController extends Controller
{
 function __construct()
 {
 $this->middleware('my-middleware');
 $this->middleware('log-middleware', ['only' => ['foo', 'bar']]); 
//selected method
 $this->middleware('subscribe-middleware', ['except' => ['baz']]) ; 
//exclude method
 }
}