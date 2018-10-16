<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //some comments
    public function index() {

        return view('home.index');

    }
}
