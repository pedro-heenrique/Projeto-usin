<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequesterController extends Controller
{
    public function index()
    {
        return view('welcome'); 
    }

    public function create() 
    {
        return view('ocurrences.create');
    }


    public function applicants() 
    {   
    return view('ocurrences.applicants');
    }

    public function createapplicants() 
    {
        return view('ocurrences.createapplicants');
    }

    public function materials()
    {
        return view('ocurrences.materials');
    }

    public function driver()
    {
        return view('ocurrences.driver');

    }

    public function car()
    {
        return view('ocurrences.car');
    }
}