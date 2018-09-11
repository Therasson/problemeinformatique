<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandeController extends Controller
{
    public function new()
    {
    	return view('admin.commande.nouvelle');
    }

    public function enCours()
    {
    	return view('admin.commande.enCours');
    }

    public function livree()
    {
    	return view('admin.commande.livree');
    }
}
