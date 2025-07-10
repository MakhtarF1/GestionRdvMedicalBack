<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{

    protected $table = 'rendez_vous';
    protected $primaryKey = 'IdRv';

    protected $fillable = [
        'DateRv', 'Statut', 'IdPatient', 'IdMedecin', 'IdSoin'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'IdPatient', 'IdU');
    }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class, 'IdMedecin', 'IdU');
    }

    public function soin()
    {
        return $this->belongsTo(Soin::class, 'IdSoin');
    }

}

