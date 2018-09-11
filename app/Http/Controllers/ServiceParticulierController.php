<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceParticulierController extends Controller
{
    public function index()
    {
    	return view('service_aux_particuliers');
    }
}
