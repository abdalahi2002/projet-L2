<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bénévole extends Model
{
    use HasFactory;
    protected $fillable = ['nni','nom', 'prenom','daten','tel','age','metier'];
}
