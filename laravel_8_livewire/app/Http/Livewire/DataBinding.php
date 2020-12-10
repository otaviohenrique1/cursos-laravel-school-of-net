<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataBinding extends Component
{
    public $name = "Coelho";
    public $age = 40;
    public $show = false;
    public $select = "PHP";
    
    public function render()
    {
        return view('livewire.data-binding');
        // return view('livewire.data-binding', [
        //     "name" => "Pombo"
        // ]);
    }
}
