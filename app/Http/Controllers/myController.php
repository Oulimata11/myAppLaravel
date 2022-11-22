<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index(){
        $name = "Oulimata";
        $age = 20;
        $tab= array('name' => "Oulimata" , 'age' => 20);
        return view('myview',$tab);
    }
}
