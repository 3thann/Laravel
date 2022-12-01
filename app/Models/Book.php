<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Author;
use App\Models\Genre;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";

    protected $fillable = ["name", "author_id", "genre_id"];

    public function author() {
        return $this->belongsTo(Author::class, "author_id");
    }

    public function genre() {
        return $this->belongsTo(Genre::class, "genre_id");
    }    
}