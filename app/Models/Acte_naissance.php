<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acte_naissance extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'date_naissance',
        'pays_naissance',
        'commune_naissance',
        'nom_pere',
        'nom_mere',
        'prenom_pere',
        'prenom_mere',
        'mere_inconnu',
        'pere_inconnu'
    ];

    protected $primaryKey = 'id';

}
