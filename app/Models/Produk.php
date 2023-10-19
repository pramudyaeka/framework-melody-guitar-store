<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = ['nama_produk','kategori_produk','stok','harga',];
    public function transaksi(): HasMany
    {
        return $this->hasMany(Transaksi::class,);
    }
}
