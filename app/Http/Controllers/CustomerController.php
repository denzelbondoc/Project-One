<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Redirect,Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = DB::table("customers")->get();
        return view('customer.index',['customers'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('customer.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        $validated=$req->validate([
            "lastName"=>['required','min:4'],
            "firstName"=>['required','min:4'],
            "email"=>['required','email', Rule::unique('users','email')],
            "contactNumber"=>['required','min:11'],
            "address"=>['required','min:4'],
            
        ]);

        $data=Customer::create($validated);
        return redirect("/")->with('success','Customer added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data=Customer::findOrFail($id);
        return view('customer.edit',['customer'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, $id)
    {
        //
        $validateData= $req->validate([
            "lastName"=>['required','min:3'],
            "firstName"=>['required','min:3'],
            "email"=>['required','email'],
            "contactNumber"=>['required','min:11'],
            "address"=>['required','min:4']
        ]);

        Customer::whereId($id)->update($validateData);

        
        return redirect("/")->with('success','Customer edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $delete=DB::table("customers")
        ->where("id","=",$id)
        ->delete();

        return Redirect::back()->with('deleted','Successfully Deleted Category !!!');
    }
}
