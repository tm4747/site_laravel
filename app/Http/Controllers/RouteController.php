<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(){
        return view('home');
    }

    public function other(){
        return view('other');
    }

    public function github(){
        return view('github');
    }
}
