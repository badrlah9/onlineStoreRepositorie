<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistics;

class AdminController extends Controller{

    // creamos un "adminController" para mostrar los statistics con la variable statistics 
    public function dashboard(){
        $statistics = Statistics::latest()->first();
        

        return view('admin.dashboard', compact('statistics'));
    }
}
