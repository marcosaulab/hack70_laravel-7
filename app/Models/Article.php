<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'subtitle',
        'body',
        'img',
    ];

    // un articolo a quanti utenti può essere associato? 1
    public function user() {
        return $this->belongsTo(User::class);
    }


    // un articolo a quante categorie può essere associato? 1 
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // un articolo con quanti tag può essere associato? N 
    // molti articoli possono essere associati a molti tag
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }


}
