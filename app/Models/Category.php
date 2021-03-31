<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class Category extends Authenticatable{
        use HasFactory, Notifiable;

        protected $table = 'categories';

        protected $fillable = ['name', 'description', 'image', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'];        
    }
