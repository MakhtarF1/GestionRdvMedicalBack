<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $primaryKey = 'idU';

    protected $fillable = [
        'NomPrenom', 
        'Tel',
        'Email', 
        'Adresse',
        'GroupeSanguin', 
        'Poids'
    ];
}
