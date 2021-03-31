<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class Product extends Authenticatable{
        use HasFactory, Notifiable;

        protected $table = 'products';

        protected $fillable = ['category_id', 'name', 'description', 'image', 'price', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'];
    }
