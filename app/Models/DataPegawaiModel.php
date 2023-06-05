<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPegawaiModel extends Model
{
    //use HasFactory;
    protected $table='data_pegawai';
    protected $guarded=[];
    protected $primaryKey='id_pegawai';
    protected $keyType = 'string';
}