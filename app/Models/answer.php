<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    use HasFactory;
    protected $table = 'answers';

    protected $fillable = [
        'answer',
        'user_pk',
        'question_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\question');
    }
}
