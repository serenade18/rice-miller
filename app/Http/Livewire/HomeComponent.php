<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class HomeComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $recipes = Recipe::paginate(8);
        return view('livewire.home-component', ['recipes' => $recipes])->layout('layouts.base');
    }
}
