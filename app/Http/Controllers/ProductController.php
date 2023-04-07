<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Redirect,Response;

class ProductController extends Controller
{
    public function index()
    {
        $data = DB::table("products")->get();
        return view('product.indexpro',['products'=>$data]);
    }
    
    public function create()
    {
        return view('product.addpro');
    }

    public function store(Request $req)
    {
        $validated=$req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:1'],
            "price"=>['required','min:1'],
            
            
        ]);

        $data=Product::create($validated);
        return redirect("/products")->with('success','Product added successfully');
    }

    public function edit($id)
    {
        
        $data=Product::findOrFail($id);
        return view('product.editpro',['product'=>$data]);
    }

    public function update(Request $req, $id)
    {
        //
        $validateData= $req->validate([
            "description"=>['required','min:4'],
            "quantity"=>['required','min:1'],
            "price"=>['required','min:1'],
        ]);

        Product::whereId($id)->update($validateData);

        
        return redirect("/products")->with('success','Product edited successfully');
    }

    public function destroy($id)
    {
        //
        $delete=DB::table("products")
        ->where("id","=",$id)
        ->delete();

        return Redirect::back()->with('deleted','Successfully Deleted Category !!!');
    }
}
