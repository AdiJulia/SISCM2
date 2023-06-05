<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProduksiModel extends Model
{
    //use HasFactory;
    protected $table='tb_dataproduksi';
    protected $guarded=[];
    protected $primaryKey='id_data_produksi';
    protected $keyType = 'string';
}