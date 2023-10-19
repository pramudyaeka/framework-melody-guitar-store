<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    use HasFactory;
    protected $table = 'transaksis';
    protected $fillable = ['harga_total','produk_id'];
    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class,'produk_id');
    }
}
