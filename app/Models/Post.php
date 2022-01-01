<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title', 'excerpt', 'body']; //fillable: field mana yg bisa diisi manual
    protected $guarded = ['id']; //guarded: field mana yg dijagain, ga boleh diisi manual
    protected $with = ['category', 'author']; //with -> eager loading utk solve N+1 problem

    public function scopeFilter($query, array $filters) {
        //if(request('search')) { //jika ada sesuatu yg ditulis di kolom pencarian, maka akan lakukan query
        // if(isset($filters['search']) ? $filters['search'] : false) { 
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                 ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        //     // return $query->where('title', 'like', '%' . request('search') . '%')
        //     //             ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search) { // => null caoalescing operator di PHP7. Gantiin fungsi ternary, jd ga perlu pake isset
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) { // ini versi callback
            return $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn($query, $author) => // ini versi arrow function
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
            )
        );
        
    }
    //name method harus sama dengan nama model yg akan direlasikan
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');    // tambahin user_id utk jadi alias buat si author
    }
}
