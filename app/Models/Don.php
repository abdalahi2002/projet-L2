<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    protected $fillable = ['id','nom', 'prenom','tel','necessiteux_id','typedon','argent','materiel','qantite'];
}
