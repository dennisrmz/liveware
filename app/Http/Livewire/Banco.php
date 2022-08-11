<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Banco extends Component
{
    protected $listeners = ["recibido" => "saldoRecibido"];

    
    public $capital = 1000;

    public function saldoRecibido()
    {
        $this->capital = 0;
    }

    public function render()
    {
        return view('livewire.banco')->layout('layouts.theme');
    }
}
