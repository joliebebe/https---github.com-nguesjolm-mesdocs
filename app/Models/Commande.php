<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'code','libelle','date_commande', 'date_livraison', 'documents_id', 'client_id', 'statut',
    ];
    protected $primaryKey = 'id';
}
