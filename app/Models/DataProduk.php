<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProduk extends Model
{
    use HasFactory;

    protected $table = 'data_produks';  // Nama tabel di database

    protected $fillable = [
        'nama_produk',
        'kode_produk',
        'kuantitas',
        'harga_beli',
        'nama_pemilik',
        'harga_jual',
        'gambar_produk',
    ];
}
