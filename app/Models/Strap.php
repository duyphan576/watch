<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strap extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'strap';

    protected $primaryKey = 'StrapID';

    protected $fillable = ['strapName'];

    public function products()
    {
        return $this->hasMany(Product::class, 'StrapID', 'StrapID');
    }
}
