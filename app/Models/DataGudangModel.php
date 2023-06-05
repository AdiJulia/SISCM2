<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGudangModel extends Model
{
    //use HasFactory;
    protected $table='tb_datagudang';
    protected $guarded=[];
    protected $primaryKey='id_data_gudang';
    protected $keyType = 'string';
}