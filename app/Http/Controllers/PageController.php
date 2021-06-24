<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index(){
        return view('home');
    }



}
