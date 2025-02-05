<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'label',
        'pole_id',
        'referent_id'
    ];
}
