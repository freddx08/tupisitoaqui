<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Apartamentos;

class SearchResultsApartamentos extends Component
{
    public function render(Request $request)
    {

        $apartamentos = Apartamentos::find($request->bedrooms);


        return view('livewire.search-results-apartamentos', compact('apartamento'));
    }
}
