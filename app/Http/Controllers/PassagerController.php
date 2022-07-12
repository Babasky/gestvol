<?php

namespace App\Http\Controllers;

use App\Models\passager;
use Illuminate\Http\Request;

class PassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passagers = passager::all();
        return view('/passagers')->with('passagers',$passagers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' =>'required',
            'prenom' =>'required',
            'numpiece' =>'required',
            'sexe' =>'required',
            'choix_classe' =>'required',
            //'id_vol' =>'not null',
            


        ]);
        $passagers = new passager;
        
        $passagers->nom = $request->input('nom');
        $passagers->prenom = $request->input('prenom');
        $passagers->numpiece = $request->input('numpiece');
        $passagers->sexe = $request->input('sexe');
        $passagers->choix_classe = $request->input('choix_classe');
        //$passagers->id_vol = $request->input('id_vol');
        

        $passagers->save();
        return redirect('/passager')->with('success', 'Passager ajouté');
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
        $this->validate($request,[
            'nom' =>'required',
            'prenom' =>'required',
            'numpiece' =>'required',
            'sexe' =>'required',
            'choix_classe' =>'required',
            'codevol' =>'required',
            


        ]);
        $passagers =  passager::findOrfail($id);
        
        $passagers->nom = $request->input('nom');
        $passagers->prenom = $request->input('prenom');
        $passagers->numpiece = $request->input('numpiece');
        $passagers->sexe = $request->input('sexe');
        $passagers->choix_classe = $request->input('choix_classe');
        $passagers->codevol = $request->input('codevol');
        

        $passagers->save();
        return redirect('/passager')->with('success', 'Passager modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $passagers = passager::find($id);

        $passagers->delete();

        return redirect('/passager')->with('success', 'Passager supprimé');
    }
}
