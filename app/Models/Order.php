<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $table = 'order';

    protected $primaryKey = 'OrderID';

    protected $fillable = [
        'UserID',
        'TotalPrice',
        'Address',
        'Phone',
        'PaymentMethod',
        'Status',
    ];

    public function user() {
        return $this->hasOne(User::class, 'UserID', 'UserID');
    }

    public function orderDetail() {
        return $this->hasMany(OrderDetail::class, 'OrderID', 'OrderID');
    }
}
