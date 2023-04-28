<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    // un tag con quanti articoli può essere associato? N 
    // molti tags possono essere associati a molti articoli
    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
