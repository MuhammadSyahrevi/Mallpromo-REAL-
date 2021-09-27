<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gagalController extends Controller
{
    public function index(){
        return view('errors.404');
    }
}
