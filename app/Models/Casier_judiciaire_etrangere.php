<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casier_judiciaire_etrangere extends Model
{
    use HasFactory;

    protected $fillable = [
         'extrait_naissance',
          'passport',
          'carte_sejour',
          'cni_parent_mere',
          'cni_parent_pere',
          'type_juridique_id',
          'client_id'
    ];

    protected $primaryKey = 'id';

}
