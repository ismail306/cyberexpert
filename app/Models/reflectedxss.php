<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reflectedxss extends Model
{
    use HasFactory;

    protected $table = 'reflectedxss';
    public $connection = 'mysql2';
    protected $fillable = [
        'name'
    ];
}
