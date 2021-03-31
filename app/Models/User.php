<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable{
        use HasFactory, Notifiable;

        protected $table = 'users';

        protected $fillable = ['name', 'email', 'password', 'image', 'status', 'created_at', 'created_by', 'updated_at', 'updated_at'];

        protected $hidden = ['password', 'remember_token'];

        protected $casts = ['email_verified_at' => 'datetime'];
    }
