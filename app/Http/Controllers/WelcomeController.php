<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

class WelcomeController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
}
