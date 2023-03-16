<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    function index(){
        $categories = categories::orderBy('id','desc')->get();
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

    public function edit($id)
    {
        $category = categories::find($id);
        
        return view('backend.categories.edit',['category' => $category]);
    }

    public function delete($id){
        $status = categories::find($id)->delete();
        if($status){
            return redirect('categories')->with('success','Record deleted successfully');
        }
        else{
            return  redirect()->back()->with('error','Something went wrong');
        }

    }

    function update(Request $request){
        $name = $request->name;
        $id = $request->id;
        
        $status = categories::where('id',$id)->update([
            'name'  => $name
        ]);

        if($status){
            return redirect('categories')->with('success','Record update successfully');
        }
        else{
            return  redirect()->back()->with('error','Something went wrong');
        }


    }
}
