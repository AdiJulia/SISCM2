<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarangModel extends Model
{
    //use HasFactory;
    protected $table='tb_databarang';
    protected $guarded=[];
    protected $primaryKey='id_data_barang';
    protected $keyType = 'string';
}