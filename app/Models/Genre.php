<?php

namespace App\Models;

use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";

    protected $fillable = [
        "name"
    ];

    public function books()
    {
        return $this->hasMany(Book::class, "genre_id");
    }
}
