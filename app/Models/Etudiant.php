<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'birthdate',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(Ville::class, 'city_id');
    }
}
