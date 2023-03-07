<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    function index (){
        return view('backend.sales.index');
    
      }
}
