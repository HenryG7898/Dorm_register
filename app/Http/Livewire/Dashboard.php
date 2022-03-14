<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::all();

        return view('livewire.dashboard',['user' => $user]);
//        return view('livewire.dashboard');
    }
}
