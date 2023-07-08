<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as Catagory;
use illuminate\Support\Str;
use App\Http\Livewire\Session;

class Category extends Component
{
    public $name;
    public $category, $collection, $slug;

    public function mount(){
        $this->collection = Catagory::all();
    }
    public function render()
    {
        return view('livewire.category');
    }
    public function submit(){
        $category = new Catagory;
        $category->name = $this->name;
        $category->save();
        $this->mount();
        $this->slug = str::slug(strtolower($this->name), '-');
    }
}
