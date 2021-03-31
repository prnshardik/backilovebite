<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Subscribe extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'subscribes';

    protected $fillable = ['email', 'created_at', 'updated_at'];
}
