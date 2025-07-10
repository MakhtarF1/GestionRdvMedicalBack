<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soin extends Model
{
    protected $primaryKey = 'IdSoin';

    protected $fillable = ['libelle', 'cout'];
}
