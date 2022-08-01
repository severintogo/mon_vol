<?php

namespace App\Http\Controllers;

use App\Models\vol;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Symfony\Contracts\Service\Attribute\Required;

class volController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $vols = vol::latest()->get();
        
        // if ($request->ajax()) {
        //     $data = vol::latest()->get();
        //     return vol::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
   
        //                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
   
        //                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
    
        //                     return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
      
        // return view('vol',compact('vol'));
        $trip =Vol::all();

        return view('vols' , compact('trip'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $trip =Vol::all();

        // return view('vols' , compact('trip',$trip));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
//         vol::updateOrCreate(['id' => $request->vol_id],
//         ['code_vol' => $request->code_vol, 'required',
//         'nombre_place_class A' => $request->nombre_place_class_A, 'required',
//         'prix_affaire' => $request->prix_affaire,'required',
//         'nombre_place_class_B' => $request->nombre_place_class_B,'required',
//         'prix_business' => $request->prix_business,'required',
//         'Date_depart' => $request->Date_depart,'required',
//         'Heure_depart' => $request->Heure_depart,'required',

    
//     ]);        

// return response()->json(['success'=>'Book saved successfully.']);


        $validatedData = $request->validate([
        
            'code_vol' => 'required',
            'nombre_place_class_A' => 'required',
            'prix_affaire' => 'required',
            'nombre_place_class_B' => 'required',
            'prix_business' => 'required',
            'Date_depart' => 'required',
            'Heure_depart' => 'required',
        ]);

        $aut = new vol ;
        $aut-> code_vol = $request-> input('code');
        $aut-> nombre_place_classe_A = $request-> input('nombreA');
        $aut-> prix_affaires= $request-> input('prixA');
        $aut-> nombre_place_classe_B = $request-> input('nombreB');
        $aut-> prix_business = $request-> input('prixB');
        $aut-> Date_depart = $request-> input('Ddepart');
        $aut-> Heure_depart = $request-> input('Hdepart');

        
    
         $trip = vol::create($validatedData);
    
        return redirect('/vol')->with('success', 'Vol créer avec succèss');
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
        $trip = vol::findOrFail($id);

        return view('edit', compact('vols'));

        // $trip = vol::find($id);
        // return response()->json($trip);
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
            'code_vol' => 'required|max:255',
            'nombre_place_class A' => 'required',
            'prix_affaire' => 'required',
            'nombre_place_class B' => 'required',
            'prix_business' => 'required',
            'date_de_depart' => 'required',
            'heure_de_depart' => 'required',
        ]);
    
        vol::whereId($id)->update($validatedData);
    
        return redirect('/vols')->with('success', 'Vol mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol = vol::findOrFail($id);
        $vol->delete();
    
        return redirect('/vols')->with('success', 'Vol supprimer avec succèss');


        // vol::find($id)->delete();
     
        // return response()->json(['success'=>'Book deleted successfully.']);
    }
}
