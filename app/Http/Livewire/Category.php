<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Catagory;
use illuminate\Support\Str;
use App\Http\Livewire\Session;

class Category extends Component
{
    public $name;
    public $category;

    public function render()
    {
        return view('livewire.category');
    }
    public function submit(){
        $category = new Catagory;
        $category->name = $this->name;
        $category->save();
        $slug = str::slug(strtolower($this->name), '-');
        dd($slug);
    }
}
