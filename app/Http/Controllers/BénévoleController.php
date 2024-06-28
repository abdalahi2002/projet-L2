<?php

namespace App\Http\Controllers;

use App\Models\bénévole;
use Illuminate\Http\Request;

class BénévoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bene = bénévole::orderBy('id', 'asc')->get();
        $benes = bénévole::count();

        return view('benevole.index',['bene'=>$bene],compact('benes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('benevole.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val = $request->validate([

            'nni' => ['min:10', 'max:10'],
            'nom' =>['min:2','max:20'],
            'prenom' => ['min:2','max:20'],
            'daten' => ['required'],
            'tel' => ['min:8','max:8'],
            'age' => ['min:2','max:2'],
            'metier' => ['required']
        ]);

        $bene = bénévole::create($val);
        return redirect('benevole')->with('succes' , 'le bénévole est engitrée avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $\id
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
        $bene = bénévole::findOrFail($id);

        return view('benevole.modifier',['bene'=>$bene]);
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
        $val = $request->validate([
            'nni' => ['min:10','max:10'],
            'nom' =>['min:2','max:20'],
            'prenom' => ['min:2','max:20'],
            'daten' => ['required'],
            'tel' => ['min:8','max:8'],
            'age' => ['min:2','max:2'],
            'metier' => ['required']
        ]);

        bénévole::whereId($id)->update($val);
        return redirect('benevole')->with('succes' , 'mise a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bene = bénévole::findOrFail($id);
        $bene->delete();
        return redirect('benevole')->with('succes' , 'le bénévole est supprimer');
    }
}
