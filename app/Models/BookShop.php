<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookshop extends Model
{
    use HasFactory;

    protected $table = "bookshops";

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
