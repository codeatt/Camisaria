<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class camisariaController extends Controller
{
    public function homeCamisaria (){
        return view('index');
    }
}
