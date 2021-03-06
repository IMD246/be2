<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function book()
    {
        return $this->hasMany(Book::class,"idCategory","id");
    }
}
