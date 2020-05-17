<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Titre;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        return view('viewTitre', compact('titres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("addTitre");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $titres=new Titre();
        $titres->titre=$request->input("titre");
        $titres->save();
        return redirect()->route("viewTitre");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titres=Titre::find($id);
        return view("show", compact('titres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $titres = Titre::find($id);
        return view('editTitre', compact('titres'));
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
        $titres=Titre::find($id);
        $titres->titre=$request->input("titre");
        $titres->save();         
        return redirect()->route("viewTitre");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $titres = Titre::find($id);
        $titres->delete();
        return redirect()->route('viewTitre');
    }
}
