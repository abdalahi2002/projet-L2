<?php

namespace App\Http\Controllers;


use App\Models\Don;
use Illuminate\Http\Request;
use App\Models\Don as ModelsDon;
use Illuminate\Support\Facades\Redirect;

class DonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $don = Don::orderBy('id', 'asc')->get();

        return view('don.index',['don'=>$don]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('don.create');
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
            'nom' =>['min:2','max:20'],
            'prenom' => ['min:2','max:20'],
            'tel' => ['min:8','max:8'],
            'necessiteux_id' => ['required_if:anotherfield,value'],
            'typedon' => ['required'],
            'argent' => ['max:20'] ,
            'materiel' => ['required'],
            'qantite' => ['required']
        ]);

         Don::create($val);
        return redirect('don')->with('succes' , 'le don est engitrée avec succes');
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
        $don = Don::findOrFail($id);

        return view('don.modifier',['don'=>$don]);
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
            'nom' =>['min:2','max:20'],
            'prenom' => ['min:2','max:20'],
            'tel' => ['min:8','max:8'],
            'necessiteux_id' => ['required_if:anotherfield,value'],
            'typedon' => ['required'],
            'argent' => ['max:20'] ,
            'materiel' => ['required'],
            'qantite' => ['required']
        ]);

        Don::whereId($id)->update($val);
        return Redirect('don')->with('succes' , 'mise a jour avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $don = Don::findOrFail($id);
        $don ->delete();
        return redirect('don')->with('succes' , 'le don est supprimer');
    }
}
