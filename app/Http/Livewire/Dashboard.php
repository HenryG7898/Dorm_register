<?php

namespace App\Http\Livewire;

use App\Models\Trainee;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = Trainee::where("room", "A1")->orderBy('first_nm', 'asc')->get();
        return view('livewire.dashboard',['user' => $user]);
    }
}
