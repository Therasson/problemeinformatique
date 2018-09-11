<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeDinterventionController extends Controller
{
    public function index()
    {
    	return view('demande_intervention');
    }
}
