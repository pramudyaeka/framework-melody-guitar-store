<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = ['nama_produk','kategori_produk','stok','harga','gambar'];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class,);
    }
}
