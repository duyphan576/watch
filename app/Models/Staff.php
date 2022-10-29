<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable {
    use HasFactory;

    protected $table = 'Staff';

    protected $primaryKey = 'StaffID';

    protected $fillable = [
        'Username',
        'Password',
        'Fullname',
        'RoleID',
        'Status',
    ];

    protected $hidden = ['password'];

    public function role() {
        return $this->hasOne(Role::class, 'RoleID', 'RoleID');
    }

    public function getAuthPassword() {
        return $this->Password;
    }
}
