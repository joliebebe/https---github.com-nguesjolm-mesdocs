<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acte_naissance_etrangere extends Model
{
    use HasFactory;

    protected $fillable = [
        'acte_naissance',
        'certificat_national',
        'cni_pere',
        'cni_mere',
        'passport_pere',
        'passport_mere',
        'mere_inconnu',
        'pere_inconnu',
        'id_attestation_pere',
        'id_attestation_mere',
        'acte_naissance_mere',
        'acte_naissance_pere',
        'certificat_deces_pere',
        'certificat_deces_mere',

    ];

    protected $primaryKey = 'id';

}
