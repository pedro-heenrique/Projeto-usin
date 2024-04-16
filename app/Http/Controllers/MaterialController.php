<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $materials = Material::all(); 

    return view('ocurrences.materials', ['materials' => $materials]);
}

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ocurrences.creatematerials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
    
        $material = new Material;

        $material->code = $request->code;
        $material->description = $request->description;
        $material->quantity = $request->quantity;
        $material->price = $request->price;

        $material->save();
        
        return redirect('/ocurrences/materials') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
