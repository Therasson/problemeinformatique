<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseConnaissanceController extends Controller
{
    public function index()
    {
    	return view('base_de_connaissance');
    }
}
