<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function details()
    {
        return view ('tempFolder.details');
    }

    public function panier()
    {
        return view('tempFolder.panier');
    }

    public function passezCommande()
    {
        return view('tempFolder.commande');
    }

    public function valider()
    {
        return view('tempFolder.valider');
    }
}
