<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'expert_nom',
        'expert_prenom',
        'expert_email',
        'expert_telephone',
        'pole_id'
    ];
}
