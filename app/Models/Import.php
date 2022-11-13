<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model {
    use HasFactory;

    protected $table = 'Import';
    protected $primaryKey = 'ImportID';
    protected $fillable = [
        'StaffID',
        'TotalQuantity',
        'Date',
    ];
    
    public function staff() {
        return $this->hasOne(Staff::class, 'StaffID', 'StaffID');
    }

    public function importDetail() {
        return $this->hasMany(ImportDetail::class, 'ImportID', 'ImportID');
    }
}
