<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyFirstRequest;

class MyFirstController extends Controller
{
    
    public static function go(MyFirstRequest $req){
        
        return $req;
        
    }
    
}
