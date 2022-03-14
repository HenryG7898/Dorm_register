<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.login');
    }
    public $email;
    public $password;

    public function onLogin()
    {

        $vaild = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            if (Auth::user()->user_type == 'admin') {
                session()->flash('message', 'Logged in successfully');
                return redirect('dashboard.blade.php');
            } elseif (Auth::user()->user_type == 'teacher') {
                session()->flash('message', 'Logged in successfully');
                return redirect('teacher/dashboard.blade.php');
            } else {
                session()->flash('error', 'Login failed');
            }
        }

    }
}
