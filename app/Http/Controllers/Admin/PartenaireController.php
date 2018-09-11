<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Partenaire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartenaireRequest;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::orderBy('id','desc')->get();
        return view('admin.partenaire.index', compact('partenaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partenaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartenaireRequest $request)
    {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/partenaires');
        $img = Image::make($image->getRealPath());
        $img->resize(172, 100)->save($destinationPath.'/'.$imageName);

        $partenaire = new Partenaire();
        $partenaire->fill([
            'name'=>$request->name,
            'site_web'=>$request->site_web,
            'file'=>$imageName,
            // 'etat'=>1
        ]);
        $partenaire->save();

        return redirect()->route('partenaire.index')->with('success', 'ENREGISTREMENT EFFECTUE AVEC SUCCES');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
