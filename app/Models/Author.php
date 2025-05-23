<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Author extends Authenticatable 
{
    use HasFactory, HasApiTokens, Notifiable;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'password',
    ];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
