<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_produk', 'harga', 'stock', 'kategori_id'];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
