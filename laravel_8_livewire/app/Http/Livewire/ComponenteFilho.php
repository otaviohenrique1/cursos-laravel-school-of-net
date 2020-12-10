<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ComponenteFilho extends Component
{
    // public $name = '';
    public $user = '';
    // protected $listeners = ['atualizaFilho' => '$refresh'];
    // protected $listeners = ['atualizaFilho' => 'atualizaFilho'];
    // protected $listeners = ['geral' => 'atualizaPai'];
    protected $listeners = ['geral' => '$refresh'];

    public function mount($user)
    {
        // $this->name = $name;
        $this->user = $user;
    }

    // public function atualizaFilho()
    // {
        // 
    // }

    public function atualizaPai()
    {
        $this->emitUp('geral');
    }

    public function render()
    {
        return view('livewire.componente-filho');
    }
}
