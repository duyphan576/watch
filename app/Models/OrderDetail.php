<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {
    use HasFactory;

    protected $table = 'orderdetail';

    protected $primaryKey = 'OrderDetailID';

    protected $fillable = [
        'OrderID',
        'ProductID',
        'Price',
        'Quantity',
    ];

    public function order() {
        return $this->belongsTo(Order::class, 'OrderID', 'OrderID');
    }

    public function product() {
        return $this->hasOne(Product::class, 'ProductID', 'ProductID');
    }
}
