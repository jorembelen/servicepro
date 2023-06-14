<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PagesComponent extends Component
{
    public function render()
    {
        return view('livewire.pages-component')->extends('layouts.master');
    }
}
