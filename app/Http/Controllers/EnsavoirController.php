<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnsavoirController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('ensavoir_plus');
    }
}
