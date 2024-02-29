<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Apartamentos;

class ShowApartamentos extends Component
{
    public function render()
    {
        $apartamentos = apartamentos::orderBy('id', 'desc')->paginate('12');

        return view('livewire.show-apartamentos', compact('apartamentos'))
            ->layout('layouts.base');
    }

    public function detail($id)
    {

        $apartamento = Apartamentos::find($id);

        return view('livewire.detail-apartamentos', compact('apartamento'))
        ->layout('layouts.base');
    }
}
