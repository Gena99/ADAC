<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partition;

class PartitionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partitions = Partition::all();
        return view('partitions', ['partitions' => $partitions]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partitionsAjouter');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $this->validate($request, [
            'artiste' => 'required|max:255',
            'titre' => 'required|max:255',
        ]);

        if (!$request->hasFile('fichier')) {
            // TODO : déclarer une erreur à afficher dans le formulaire
            return redirect()->back();
        }


        $partition = new Partition;
        $partition->artiste = $request->input('artiste');
        $partition->titre = $request->input('titre');
        $partition->fichier = $partition->artiste . '_' . $partition->titre . '.pdf';

        // traitement du fichier uploadé
        $uploadedFile = $request->file('fichier');
        $destination = public_path() . '/files/partitions/' . $partition->fichier;
        move_uploaded_file($uploadedFile->path(), $destination);

        $partition->save();
        // si succès
        return redirect('partitions');

        //TODO : gestion ds erreurs > si erreur réafficher formulaire avec erreurs
        // return back()->withInput(); // ???

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partition::destroy(array($id));
        return redirect('partitions');
    }


    /**
     * @param Request $request
     * @param $fichier
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function telecharger(Request $request, $fichier)
    {
        $pathToFile = public_path() . '/files/partitions/' . $fichier;

        return response()->download($pathToFile);

    }
}
