<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properties extends Component
{
    // public $saludo = "hola mundo";

    public function render()
    {

        return view('livewire.properties', ['saludo' => "hola nuevamente"])->layout('layouts.theme');
    }
}
