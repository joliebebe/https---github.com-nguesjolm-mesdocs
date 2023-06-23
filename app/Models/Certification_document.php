<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certification_document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_original',
        'document_copie'
    ];

    protected $primaryKey = 'id';

}
