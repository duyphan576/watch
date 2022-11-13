<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model {
    use HasFactory;

    protected $table = 'storage';

    protected $primaryKey = 'ProductID';

    protected $fillable = [
        'Quantity',
    ];

    public function product() {
        return $this->hasOne(Product::class, 'ProductID', 'ProductID');
    }
    
}
