<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceEntrepriseController extends Controller
{
    public function index()
    {
    	return view('service_aux_entreprises');
    }
}
