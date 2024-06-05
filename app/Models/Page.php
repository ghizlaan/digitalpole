<?php

// app/Models/Page.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function projets()
    {
        return $this->belongsToMany(Projet::class, 'project_page');
    }
}
