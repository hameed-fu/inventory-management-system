<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    function index(){
        return view('backend.categories.index');
    }

    function create(){

    }

    function store(Request $request){
        $name = $request->name;
        
        $status = categories::insert([
            'name'  => $name
        ]);

        if($status){
            return  redirect()->back();
        }
        else{
            return "Something went wrong";
        }


    }
}
