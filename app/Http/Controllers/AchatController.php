<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class AchatController extends Controller
{
   	public function index()
    {
    	return view('achat');
    }

    public function ordinateurNeuf()
    {
        $title = "Achat Ordinateur neuf";
        $categorie = Categorie::where('slug','ordinateur-neuf')->first();

        return view('produit_categorie', compact('categories', 'title'));

        /*if($categorie->count()>0){
            return view('produit_categorie', compact('categorie', 'title'));
        }
        else{

        }*/

    }

    public function ordinateurOccasion()
    {
        $title= "Achat Ordinateur occasion";
        $categorie = Categorie::where('slug','ordinateur-occasion')->get();
        return view('produit_categorie', compact('categorie', 'title'));
    }
    
    public function accessoire()
    {
        $title= "Achat accessoire";
        $categorie = Categorie::where('slug','accessoire')->get();
        return view('produit_categorie', compact('categorie', 'title'));
    }
}
