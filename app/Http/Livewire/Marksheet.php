<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use App\Models\Trainee;
use Livewire\Component;

class Marksheet extends Component
{
    public function render()
    {
//        $user = DB::table('trainee')->orderBy('room', 'asc')->get();
        $mark = \App\Models\marksheet::with('trainee')->get();
        return view('livewire.marksheet', ['mark'=>$mark]);
    }

    public function present($id){
        $trainee = \App\Models\marksheet::where('id', $id)->update(['mark'=>1]);
    }

    public function absent($id){
        $trainee = \App\Models\marksheet::where('id', $id)->update(['mark'=>2]);
    }
}
