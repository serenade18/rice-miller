<?php

namespace App\Http\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeDetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $recipe = Recipe::where('slug', $this->slug)->first();
        return view('livewire.recipe-details-component', ['recipe' => $recipe])->layout('layouts.base');
    }
} 
