<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body']; //fillable: field mana yg bisa diisi manual
    protected $guarded = ['id']; //guarded: field mana yg dijagain, ga boleh diisi manual
}
