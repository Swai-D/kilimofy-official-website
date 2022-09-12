<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBladeController extends Controller
{
    public function index(){
      return view('HomeBladeFiles.index');
    }
}
