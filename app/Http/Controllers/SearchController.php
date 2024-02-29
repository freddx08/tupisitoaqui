<?php

namespace App\Http\Controllers;

use App\Models\Apartamentos;
use Illuminate\Console\View\Components\Component;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        return view('livewire.search-apartamentos');
    }

    public function store(Request $request){



        $apartamentos = Apartamentos::whereBetween('price', [$request->min_val, $request->max_val])
        ->where('bedrooms', $request->bedrooms)
        ->where('construction_year', '>', $request->construction_year)
        ->orderBy('price', 'asc')->get();

        return view('livewire.search-results-apartamentos', compact('apartamentos'));
    }
}
