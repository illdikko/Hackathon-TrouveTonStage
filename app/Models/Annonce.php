<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonce';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'label',
        'contenu',
        'remuneration',
        'metier_id'
    ];

    protected $casts = [
        'remuneration' => 'boolean'
    ];

    public function metier() {
        return $this->belongsTo('App\Models\Metier', 'metier_id');
    }

    public function referent() {
        return $this->belongsTo('App\Models\Referent', 'referent_id');
    }
}
