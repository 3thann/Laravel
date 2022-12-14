<?php

namespace App\Models;

use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = "author";

    protected $fillable = [
        "first_name", 
        "last_name"
    ];

    public function books()
    {
        return $this->hasMany(Book::class, "author_id");
    }
}
