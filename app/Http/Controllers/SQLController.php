<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\MyFirstRequest;
use Illuminate\Support\Facades\DB;

class SQLController extends Controller
{
    
    public static function getStudents(MyFirstRequest $req){
        
        $students = DB::connection('pgsql')->select('select * from students');
        return $students;
        
    }
    
    public static function getClasses(MyFirstRequest $req){
        
        $classes = DB::connection('pgsql')->select('select * from class');
        return $classes;
        
    }
    
    public static function getTeachers(MyFirstRequest $req){
        
        $teachers = DB::connection('pgsql')->select('select * from teachers');
        return $teachers;
        
    }
    
}
