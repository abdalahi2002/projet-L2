<?php

namespace App\Models;

use App\Models\don;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Necessiteux extends Model
{
    use HasFactory;

    protected $fillable = ['id','nni','nom', 'prenom','daten','age','tel','besoin'];

    public function don(){
        return $this->hasOne(don::class);
    }
}
