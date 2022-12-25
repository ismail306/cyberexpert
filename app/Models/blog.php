<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    protected $fillable = [
        'owner',
        'category',
        'image',
        'title',
        'description',
        'reading_time',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
