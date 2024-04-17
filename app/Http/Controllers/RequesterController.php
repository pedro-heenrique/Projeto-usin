<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Solicitacao;

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

    public function cars()
    {
        return view('ocurrences.cars');
    }

    public function creatematerials() 
    {   
    return view('ocurrences.creatematerials');
    }

    // Método para armazenar uma nova solicitação
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_solicitante' => 'required',
            'setor' => 'required',
            'material' => 'required',
            'motorista' => 'required',
            'automovel' => 'required',
            'endereco_origem' => 'required',
            'endereco_entrega' => 'required',
        ]);

        Solicitacao::create($validatedData);

        return redirect()->route('index'); 
    }
}


