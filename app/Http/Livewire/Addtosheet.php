<?php

namespace App\Http\Livewire;

use App\Models\Trainee;
use App\Models\marksheet;
use Livewire\Component;

class Addtosheet extends Component
{
    public $student_id;

    public function render()
    {
        return view('livewire.addtosheet');
    }



    public function addtrainee(){

        $choice = marksheet::where([
            'student_id' => $this->student_id,

        ])->exists();
        session()->flash('failure', 'Trainee Already Added Register');

        if (!$choice) {
            marksheet::create([
                'student_id' => $this->student_id,
            ]);
        }

//        marksheet::create([
////            dd($this->student_id),
//            'student_id' => $this->student_id,
//        ])->exists();
        session()->flash('success', 'Trainee Added Register');
    }

    public function mount(){
        $trainee = Trainee::all();
        $this->trainee = $trainee;
    }

}
