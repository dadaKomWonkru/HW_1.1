<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable =[
        "title",
        "author",
        "pages",
        "language",
        ];

    public $timestamps = false;

}
