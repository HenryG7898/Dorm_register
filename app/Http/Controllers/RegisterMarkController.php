<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMarkController extends Controller
{


    public function store(Request $request){
        dd($request->all());
        $trainee_nm = $request->trainee_nm;
        $dorm_nm = $request->dorm_nm;
        $marking = $request->marking;

        $datasave = [
            'trainee_nm' => $trainee_nm,
            'dorm_nm' => $dorm_nm,
            'marking' => $marking
        ];

    }

}
