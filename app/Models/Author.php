<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Author as Authenticatable;

class Author extends Model 
{
    use HasFactory, HasApiTokens, Notifiable, Authenticatable;

    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'password',
    ];
}
