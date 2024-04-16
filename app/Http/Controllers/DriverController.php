<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    
    public function index()
    {
        $drivers = Driver::all(); {

        return view('ocurrences.drivers', ['drivers' => $drivers]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ocurrences.createdrivers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $driver = new Driver;

        $driver->code = $request->code;
        $driver->name = $request->name;

        $driver->save();
        
        return redirect('/ocurrences/drivers') ;
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        //
    }
}
