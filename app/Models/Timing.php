<?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class Timing extends Authenticatable{
        use HasFactory, Notifiable;

        protected $table = 'timings';

        protected $fillable = ['days', 'start_time', 'end_time', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'];        
    }
