<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'datePublication',
        'prix',
        'email',
        'tel',
        'categorie_id'
    ];

    public function category()
{
    return $this->belongsTo(Categorie::class, 'categorie_id');
}
}
