<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model {
    use HasFactory;

    protected $table = 'import';

    protected $primaryKey = 'ImportID';

    protected $fillable = [
        'StaffID',
        'TotalQuantity',
        'TotalPrice',
        'Date',
    ];

    public function staff() {
        return $this->hasOne(Staff::class, 'StaffID', 'StaffID');
    }
    
}
