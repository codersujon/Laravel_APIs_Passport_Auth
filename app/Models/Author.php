<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    
    public $timestamps = false;
    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'password',
    ];
}
