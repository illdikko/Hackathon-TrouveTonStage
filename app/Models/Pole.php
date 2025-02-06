<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pole extends Model
{
    use HasFactory;

    protected $table = 'pole';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'label',
    ];
}
