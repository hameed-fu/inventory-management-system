<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
   function index()
   {
    return view('backend.purchases.index');
   }
}
