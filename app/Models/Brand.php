<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brand";
    protected $primaryKey = 'id_brand';

    protected $fillable = [
        'nama',
        'tagline',
        'deskripsi',
        'logo',
        'url',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_product', 'id_product');
    }
}
