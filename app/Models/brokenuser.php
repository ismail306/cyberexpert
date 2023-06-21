<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brokenuser extends Model
{
    use HasFactory;

    protected $table = 'brokenusers';
    public $connection = 'mysql2';
    protected $fillable = [
        'username',
        'password'
    ];
}
