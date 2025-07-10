<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $primaryKey = 'idU';

    protected $fillable = [
        'NomPrenom', 
        'Tel',
        'Email', 
        'Adresse',
        'Specialite', 
        'NumeroOrdre'
    ];
}
