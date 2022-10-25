<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'role';

    protected $primaryKey = 'RoleID';

    protected $fillable = ['RoleName'];

    public function products()
    {
        return $this->hasMany(Product::class, 'RoleID', 'RoleID');
    }
}
