<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPemasokModel extends Model
{
    //use HasFactory;
    protected $table='tb_pemasok';
    protected $guarded=[];
    protected $primaryKey='id_pemasok';
    protected $keyType = 'string';
}