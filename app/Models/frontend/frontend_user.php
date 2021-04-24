<?php

namespace App\Models\frontend;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class frontend_user extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name','email','password','remember_token'
    ];
}

