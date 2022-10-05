<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function showTrainList() {

        $trains = Train::whereDate('departure_time', date("Y-m-d") )->get();

       
       return view('train_list', compact("trains"));
       
    }
}
