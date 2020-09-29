<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gafam;

class GafamController extends Controller
{
    public function index() {
        $gafams = Gafam::all();
        $data = ['gafams' => $gafams];

        return view('gafam', $data);
    }
}
