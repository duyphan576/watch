<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $table = 'product';

    protected $primaryKey = 'ProductID';

    protected $fillable = [
        'ProuductID',
        'BrandID',
        'StrapID',
        'ProductName',
        'Price',
        'Image',
        'IsShow',
    ];
}
