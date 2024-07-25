<?php

namespace App\Http\Controllers;

use App\Models\studio;
use App\Models\kriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    public function index() {

    $studio= studio::count();
    $kriteria= kriteria::count();

    return view('main',[
        'title' => 'Dashboard'
    ], compact('studio','kriteria'));
    }
}
