<?php

namespace App\Http\Controllers;
use illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Apartamentos;

class ApartmentController extends Controller 
{
    public function index()
    {
        $apartamentos = apartamentos::orderBy('id', 'desc')->paginate();

        return view('livewire.show-apartamentos', compact('apartamentos'));
    }

    public function store(Request $request)
    {

        return $request->all();

    }

    public function show($id)
    {

        $apartamento = Apartamentos::find($id);


        return view('apartamentos.show', compact('apartamento'));
    }
}