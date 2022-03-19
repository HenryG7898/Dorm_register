<?php

namespace App\Http\Livewire;

use App\Models\Trainee;
use Livewire\Component;

class Marksheet extends Component
{
    public function render()
    {
        $mark = \App\Models\marksheet::with('trainee')->get();
        return view('livewire.marksheet', ['mark'=>$mark]);
    }
}
