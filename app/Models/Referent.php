<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referent extends Model
{
    use HasFactory;

    protected $table = 'referent';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'prenom',
        'nom',
        'email',
        'telephone'
    ];

    public function getFullName(): string {
        return $this->prenom . ' ' . $this->nom;
    }
}
