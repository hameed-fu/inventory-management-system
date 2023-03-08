<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    function index(){
        $categories = categories::all();
        return view('backend.categories.index', compact('categories')); //['categories' => $categories]
    }

    function create(){

    }

    function store(Request $request){
        $name = $request->name;
        
        $status = categories::insert([
            'name'  => $name
        ]);

        if($status){
            return redirect('categories')->with('success','Record added successfully');
        }
        else{
            return  redirect()->back()->with('error','Something went wrong');
        }


    }
}
