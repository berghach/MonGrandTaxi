<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'user_role',
        'phone_number',
        'description',
        'car_immat',
        'car_type',
        'status',
        'payment_method'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);
        $this->attributes['user_role'] = $this->getUserRole();
    }

    // Common methods and properties for all users

    private function getUserRole() {
        $class = strtolower(class_basename($this));
        // You may have a mapping for class names to enum values
        $roleMapping = [
            'admin' => 'admin',
            'passenger' => 'passenger',
            'driver' => 'driver',
        ];

        return $roleMapping[$class] ?? 'passenger';
    }
}
