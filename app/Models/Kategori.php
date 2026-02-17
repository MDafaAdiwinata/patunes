<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_product', 'id_product');
    }
}
