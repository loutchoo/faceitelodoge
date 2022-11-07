<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FaceitClient\FaceitClient;
use Illuminate\Support\Facades\Http;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
}