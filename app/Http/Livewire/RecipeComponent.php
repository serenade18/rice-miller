<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;
use Livewire\WithPagination;

class RecipeComponent extends Component
{
    //use WithPagination;

    public function render()
    {
       // $recipes = Recipe::orderBy('created_at', 'DESC')->get()->take(8);
       $recipes = Recipe::paginate(8);

        return view('livewire.recipe-component', ['recipes' => $recipes])->layout('layouts.base');
    }
}
