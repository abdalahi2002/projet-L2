<?php

namespace App\Http\Controllers;

use App\Models\bénévole;
use App\Models\Don;
use App\Models\Necessiteux;
use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function accueil(){
        $user = User::count();
        $nece = user::where('utili','active')->count();
        $don = Don::sum('argent');
        $neces = Necessiteux::count();
        $bene = bénévole::count();
        $dons = Don::count();
        $d = Don::sum('qantite');
        return view('accuiel',compact('user','nece','don','neces','bene','dons','d'));
    }
}
