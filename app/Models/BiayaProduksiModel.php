<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaProduksiModel extends Model
{
    //use HasFactory;
    protected $table='tb_biayaproduksi';
    protected $guarded=[];
    protected $primaryKey='id_biaya_produksi';
    protected $keyType = 'string';
}