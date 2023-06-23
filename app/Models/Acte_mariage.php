<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acte_naissance_etrangere extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'nom_femme',
        'prenom_femme',
        'nom_homme',
        'prenom_homme',
        'sexe_femme',
        'sexe_homme',
        'date_naissance_femme',
        'date_naissance_homme'

    ];

    protected $primaryKey = 'id';

}
