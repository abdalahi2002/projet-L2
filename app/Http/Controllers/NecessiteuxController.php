<?php

namespace App\Http\Controllers;

use App\Models\Necessiteux;
use Illuminate\Http\Request;

class NecessiteuxController extends Controller
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
        $nece = Necessiteux::orderBy('id', 'asc')->get();
    

        return view('necessiteux.index',['nece'=>$nece]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('necessiteux.create');
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
            'besoin' => ['required']
        ]);

        $nece = Necessiteux::create($val);
        return redirect('necessiteux')->with('succes' , 'le bénévole est engitrée avec succes');
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
        $nece = Necessiteux::findOrFail($id);

        return view('necessiteux.modifier',['nece'=>$nece]);
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
            'nni' => ['min:10', 'max:10'],
            'nom' =>['min:2','max:20'],
            'prenom' => ['min:2','max:20'],
            'daten' => ['required'],
            'tel' => ['min:8','max:8'],
            'age' => ['min:2','max:2'],
            'besoin' => ['required']
        ]);

        Necessiteux::whereId($id)->update($val);
        return redirect('necessiteux')->with('succes' , 'mise a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nece = Necessiteux::findOrFail($id);
        $nece -> delete();
        return redirect('necessiteux')->with('succes' , 'le bénévole est supprimer');
    }
}
