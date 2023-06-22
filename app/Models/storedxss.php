<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class storedxss extends Model
{
    use HasFactory;
    public $connection = 'mysql2';
    protected $table = 'storedxss';
    protected $fillable = ['name', 'message'];
}
