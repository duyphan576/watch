<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'UserID';

    protected $fillable = [
        'Username',
        'Password',
        'Fullname',
        'Birthday',
        'Phone'
    ];

    protected $hidden = ['Password'];

    public function getAuthPassword() {
        return $this->Password;
    }

    public function getStatus() {
        return $this->Status;
    }
}
