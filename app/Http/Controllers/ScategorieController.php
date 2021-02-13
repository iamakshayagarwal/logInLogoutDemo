<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Scategorie;
use App\Http\resources\ScategoriesResource;

class ScategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Scategorie=Scategorie::paginate(10);
        return ScategorieResource::collection($Scategorie);

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
        $Scategorie = new Scategorie;
        $Scategorie->sub_cat_name=$request->sub_cat_name;
        $Scategorie->cat_id=$request->cat_id;
        

        if($Scategorie->save())
        {
            return new ScategorieResource($Scategorie);
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
        $Scategorie = Scategorie::findOrFail($id);
        return new ScategorieResource($Scategorie);
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
        $Scategorie =Scategorie::findOrFail($id);
        $Scategorie->name=$request->name;
        $Scategorie->cat_id=$request->cat_id;
       
        if($Scategorie->save())
        {
            return new ScategorieResource($Scategorie);
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
        $Scategorie =Scategorie::findOrFail($id);
        if($Scategorie->delete())
        {
            return new ScategorieResource($Scategorie);
        }
    }
}
