<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOutletModel extends Model
{
    //use HasFactory;
    protected $table='tb_dataoutlet';
    protected $guarded=[];
    protected $primaryKey='id_outlet';
    protected $keyType = 'string';
}