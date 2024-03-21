<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trains;

class TrainController extends Controller
{
    public function __invoke(){
        $trains = Trains::all();

        return view('home', compact('trains'));
    }
}
