<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'role',
        'password',
        'profile_pic',
        'about',
        'certificate',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blogs()
    {
        return $this->hasMany(blog::class, 'user_id');
    }

    public function answers()
    {
        return $this->hasMany(answer::class, 'user_pk');
    }

    public function questions()
    {
        return $this->hasMany(question::class, 'user_pk');
    }

    public function react()
    {
        return $this->hasMany(react::class, 'user_id');
    }

    public function news()
    {
        return $this->hasMany(news::class, 'user_id');
    }
}
