<?php

namespace App\Http\Livewire;

use App\Models\Trainee;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $trainees = Trainee::all();
        return view('livewire.dashboard', ['trainees' => $trainees]);
    }
}
