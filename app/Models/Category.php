<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //name method harus sama dengan nama model yg akan direlasikan
    public function posts() {
        return $this->hasMany(Post::class);
    }
}
