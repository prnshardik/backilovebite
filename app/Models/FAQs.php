<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class FAQs extends Authenticatable{
        use HasFactory, Notifiable;

        protected $table = 'faqs';

        protected $fillable = ['title', 'discription', 'status' , 'created_at', 'created_by', 'updated_at', 'updated_by'];        
    }
