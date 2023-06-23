<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acte_deces extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_heures',
        'lieu',
        'nom',
        'prenom',
        'profession',
        'date_naissance',
        'lieu_naissance',
        'domicile'

    ];

    protected $primaryKey = 'id';

}
