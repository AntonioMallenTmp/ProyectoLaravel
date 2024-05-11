<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    public function index(){
        $nombre = "Antonio";
        return view('index', compact('nombre'));
    }

}
