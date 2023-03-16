<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;

class ItemController extends Controller
{
    public function index(){
        $items = item::orderBy('id','desc')->get();

        return view('backend.items.index', compact('items'));
    }
    function store(Request $request){
        $name = $request->name;
        $Quantity = $request->Quantity;
        $purchase_price= $request->purchase_price;
        $sale_price = $request->sale_price;
        $category_id = $request->category_id;
        $description = $request->description;
        
        
        $status = Item::insert([
            'name'  => $name,
            'Quantity'  =>  $Quantity,
            'purchase_price'  => $purchase_price,
            'sale_price'  => $sale_price,
            'category_id'  =>  $category_id,
            'Description'  =>  $description

        ]);

        if($status){
            return redirect('items')->with('success','Record added successfully');
        }
        else{
            return  redirect()->back()->with('error','Something went wrong');
        }


    }
    public function delete($id){
        $status = Item::find($id)->delete();
        if($status){
            return redirect('items')->with('success','Record deleted successfully');
        }
        else{
            return  redirect()->back()->with('error','Something went wrong');
        }

    }

}
