<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Categorie;
use App\Http\resources\CategorieResource;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorie=Categorie::paginate(10);
        return CategorieResource::collection($Categorie);

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
        $Categorie = new Categorie;
        $Categorie->name=$request->name;
        $Categorie->cat_id=$request->cat_id;
        

        if($Categorie->save())
        {
            return new CategorieResource($Categorie);
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
        $Categorie = Categorie::findOrFail($id);
        return new CategorieResource($Categorie);
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
        $Categorie =Categorie::findOrFail($id);
        $Categorie->name=$request->name;
        $Categorie->cat_id=$request->cat_id;
       
        if($Categorie->save())
        {
            return new CategorieResource($Categorie);
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
        $Categorie =Categorie::findOrFail($id);
        if($Categorie->delete())
        {
            return new CategorieResource($Categorie);
        }
    }
}
