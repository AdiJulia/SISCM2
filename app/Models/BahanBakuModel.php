<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBakuModel extends Model
{
    //use HasFactory;
    protected $table='tb_bahanbaku';
    protected $guarded=[];
    protected $primaryKey='id_bahan_baku';
    protected $keyType = 'string';
}