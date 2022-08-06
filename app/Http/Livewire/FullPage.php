<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullPage extends Component
{
    public function render()
    {
        //
        // return view('livewire.fullpage')-s>extends('layouts.theme');

        return view('livewire.fullpage')->layout('layouts.theme');
    }
}
