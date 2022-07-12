<?php

namespace App\Http\Controllers;
use App\Models\vol;
use Illuminate\Http\Request;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avions = vol::all();
        return view('vols')->with('avions',$avions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'codevol' =>'required',
            'date_depart' =>'required',
            'heure_depart' =>'required',
            'destination' =>'required',
            'nb_classa' =>'required',
            'nb_classb' =>'required',
            'prix_classa' =>'required',
            'prix_classb' =>'required',


        ]);
        $avions = new vol;
        
        $avions->codevol = $request->input('codevol');
        $avions->date_depart = $request->input('date_depart');
        $avions->heure_depart = $request->input('heure_depart');
        $avions->destination = $request->input('destination');
        $avions->nb_classa = $request->input('nb_classa');
        $avions->nb_classb = $request->input('nb_classb');
        $avions->prix_classa = $request->input('prix_classa');
        $avions->prix_classb = $request->input('prix_classb');

        $avions->save();
        return redirect('/vol')->with('success', 'Avion ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avions = vol::find($id);
        
        $avions->show($id);
        return redirect('/vol',compact($id));
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
            'codevol' =>'required',
            'date_depart' =>'required',
            'heure_depart' =>'required',
            'destination' =>'required',
            'nb_classa' =>'required',
            'nb_classb' =>'required',
            'prix_classa' =>'required',
            'prix_classb' =>'required',


        ]);
        $avions =  vol::find($id);
        
        $avions->codevol = $request->input('codevol');
        $avions->date_depart = $request->input('date_depart');
        $avions->heure_depart = $request->input('heure_depart');
        $avions->destination = $request->input('destination');
        $avions->nb_classa = $request->input('nb_classa');
        $avions->nb_classb = $request->input('nb_classb');
        $avions->prix_classa = $request->input('prix_classa');
        $avions->prix_classb = $request->input('prix_classb');

        $avions->save();
        return redirect('/vol')->with('success', 'Avion modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $avions = vol::find($id);
        
        $avions->delete();
        return redirect('/vol')->with('success', 'Avion supprimé');
    }
}
