<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SqlUser extends Model
{
    use HasFactory;
    protected $table = 'sqlusers';
    public $connection = 'mysql2';
    protected $fillable = [
        'username',
        'password',
    ];
}
