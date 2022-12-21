<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    protected $table = 'questions';



    protected $fillable = [
        'question',
        'user_pk',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\answer');
    }
}
