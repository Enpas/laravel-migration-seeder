<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;

class HolidaysController extends Controller
{
   
    
    public function index() {
        
        $holidays = Holiday::all();

        return view('holidays', ['holidays' => $holidays]);
    }


}
