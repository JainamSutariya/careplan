<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Branch extends Model
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'branch';

    protected $fillable = [
        'name',
        'shop_name',
        'mobile_no',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
