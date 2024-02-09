<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Passenger extends User
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'password',
        'user_role',
        'phone_number'
    ];
}
