<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'pole_id',
        'expert_nom',
        'expert_email',
        'expert_telephone',
    ];
}
