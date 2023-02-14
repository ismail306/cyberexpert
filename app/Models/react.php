<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class react extends Model
{
    use HasFactory;
    protected $table = 'reacts';
    protected $fillable = [
        'user_id',
        'blog_id',
    ];

    //user has many reactions
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //one blog has many reactions
    public function blog()
    {
        return $this->belongsTo(blog::class);
    }
}
