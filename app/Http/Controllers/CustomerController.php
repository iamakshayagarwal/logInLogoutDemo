<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use App\Http\resources\CustomerResource;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Customer=Customer::paginate(10);
        return CustomerResource::collection($Customer);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Customer = new Customer;
        $Customer->name=$request->name;
        $Customer->number=$request->number;
        $Customer->country=$request->country;
        $Customer->city=$request->city;
        $Customer->address_line1=$request->address_line1;
        $Customer->address_line2=$request->address_line2;

        if($Customer->save())
        {
            return new CustomerResource($Customer);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Customer = Customer::findOrFail($id);
        return new CustomerResource($Customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Customer =Customer::findOrFail($id);
        $Customer->name=$request->name;
        $Customer->number=$request->number;
        $Customer->country=$request->country;
        $Customer->city=$request->city;
        $Customer->address_line1=$request->address_line1;
        $Customer->address_line2=$request->address_line2;
        if($Customer->save())
        {
            return new CustomerResource($Customer);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Customer =Customer::findOrFail($id);
        if($Customer->delete())
        {
            return new CustomerResource($Customer);
        }
    }
}
