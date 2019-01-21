<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Ajouter un etudiant.
     * 
     * 
     * @return sur la vue precedante
     * 
     */
    public function add(Request $request)
    {
        Etudiant::create($request->all());
        
        #return view('home');
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }

    /**
     * Valider la modification sur le formulaire.
     * 
     * @param int $id (id de l'étudiant), request ce qui a été posté les input
     * 
     * @return sur la vue précédente
     * 
     */
    public function update(Request $request, $id){

        $etudiant = Etudiant::findorfail($id); //si l'id n'existe pas, il retourne une erreur 404
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
       return back()->with('status', trans('etudiant.msgmisesajourok'));

     //  return redirect()->route('home') ;
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant =Etudiant::find($id);
        return view('etudiant.edit',compact('etudiant','id'));
    }


    public function show($id)
    {
        
        $etudiant  =Etudiant::find($id);
        return view('etudiant.show',compact('etudiant'));
    }


    public function destroy($id)
    {
       
            Etudiant::find($id)->delete();
            return redirect()->route('home') ;

    
    }

    
}
