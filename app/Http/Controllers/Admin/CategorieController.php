<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::where('etat',1)->orderBy('id', 'desc')->get();
        return view('admin.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::where('etat',1)->limit(5)->get();
        return view('admin.categorie.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $categorie = new Categorie();
        $categorie->fill([
           'libelle'            =>  $request->name,
            'description'       =>  $request->description,
            'slug'              =>  str_slug($request->name),
            'etat'              =>  1
        ]);
        $categorie->save();

        return redirect()->route('categorie.index')->with('success', 'ENREGISTREMENT EFFECTUE AVEC SUCCES');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('admin.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->libelle = $request->name;
        $categorie->slug = str_slug($request->name);
        $categorie->description = $request->description;
        $categorie->save();

        return redirect()->route('categorie.index')->with('success', 'MODIFICATION EFFECTUEE AVEC SUCCES');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return redirect()->route('categorie.index')->with('success', 'SUPPRESSION EFFECTUEE AVEC SUCCES');
    }
}
