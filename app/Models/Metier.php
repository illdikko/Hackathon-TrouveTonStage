<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metier extends Model
{
    use HasFactory;

    protected $table = 'metier';

    public $timestamps = false;


    protected $fillable = [
        'id',
        'label',
        'pole_id',
        'referent_id'
    ];

    public function referent() {
        return $this->belongsTo('App\Models\Referent', 'referent_id');
    }
}
