<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $primaryKey = 'id_product';
    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'id_brand',
        'id_kategori',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand', 'id_brand');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
