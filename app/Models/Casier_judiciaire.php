<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casier_judiciaire extends Model
{
    use HasFactory;

    protected $fillable = [
         'extrait_naissance',
          'situation_matrimoniale',
          'profession',
          'ville_habitation',
          'type_juridique_id',
          'client_id'
    ];

    protected $primaryKey = 'id';

}
