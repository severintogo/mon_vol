<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use App\Models\vols;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserv = reservations::all();

    return view('reservations', compact('reserv'));
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
        $validatedData = $request->validate([
        
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'sex' => 'required',
            'class' => 'required',
            'vol' => 'required',
        
        ]);
    
        $reservations = reservations::create($validatedData);
    
        return redirect('/reservations')->with('success', 'reservation créer avec succèss');
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
        $reserv = reservations::findOrFail($id);

        return view('edit', compact('reservations'));
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
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'sex' => 'required',
            'class' => 'required',
            'vol' => 'required',
        ]);
    
        reservations::whereId($id)->update($validatedData);
    
        return redirect('/reservations')->with('success', 'reservations mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserv = reservations::findOrFail($id);
        $reserv->delete();
    
        return redirect('/reservations')->with('success', 'reservation supprimer avec succèss');
    }
}
