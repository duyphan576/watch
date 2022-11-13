<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportDetail extends Model {
    use HasFactory;

    protected $table = 'ImportDetail';
    protected $primaryKey = 'ImportDetailID';
    protected $fillable = [
        'ImportID',
        'ProductID',
        'Quantity',
    ];

    public function order() {
        return $this->hasOne(Import::class, 'ImportID', 'ImportID');
    }

    public function product() {
        return $this->hasOne(Product::class, 'ProductID', 'ProductID');
    }
}
