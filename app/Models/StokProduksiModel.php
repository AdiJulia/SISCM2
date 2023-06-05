<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokProduksiModel extends Model
{
    //use HasFactory;
    protected $table='tb_stokproduksi';
    protected $guarded=[];
    protected $primaryKey='id_stok_produksi';
    protected $keyType = 'string';
}