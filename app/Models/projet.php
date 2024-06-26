<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'projets';

    protected $fillable = [
        'nom', 
        'type_projet',
        'description', 
        'technologies', 
        'design_preference',
        'pages',
        'additional_pages',
        'client_id'
    ];

    protected $casts = [
        'pages' => 'array',
    ];
    
}