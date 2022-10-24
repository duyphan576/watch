<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'Staff';

    protected $primaryKey = 'StaffID';

    protected $fillable = [
        'username',
        'password',
        'fullname',
    ];

    protected $hidden = ['password'];

    public function role() {
        return $this->hasOne(Role::class, 'RoleID', 'RoleID');
    }
}
