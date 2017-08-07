<?php

namespace App\Http\Controllers;

use App\Nouvelle;
use Illuminate\Http\Request;

class nouvellesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nouvelles= Nouvelle::all();
        return view('accueil', ['nouvelles' => $nouvelles]);
    }

    /**
     * Show the form for creating a nouvelle resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajoutnouvelles');
    }

    /**
     * Store a nouvellely created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouvelles= new Nouvelle;
        $nouvelles->titre=$request->input('titre');
        $nouvelles->resume=$request->input('resume');
        $nouvelles->texte=$request->input('texte');
        $nouvelles->evenement=$request->input('evenement');
        $nouvelles->date=$request->input('date');
        $nouvelles->save();
        return redirect('ajoutnouvelles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nouvelles  $nouvelles
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nouvelles  $nouvelles
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
     * @param  \App\nouvelles  $nouvelles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nouvelles  $nouvelles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nouvelle::destroy(array($id));
        return redirect('ajoutnouvelles');
    }
}
