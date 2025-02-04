<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'titre',
        'contenu',
        'metier_id',
        'contact_id',
        'contact_email',
        'contact_telephone'
    ];
}
