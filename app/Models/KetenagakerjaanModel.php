<?php

namespace App\Models;

use App\Http\Controllers\datapegawaicon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetenagakerjaanModel extends Model
{
    //use HasFactory;
    protected $table='tb_tenagakerja';
    protected $guarded=[];
    protected $primaryKey='id_tenaga_kerja';
    protected $keyType = 'string';
    // public function fk_pegawai(){
    //     return $this->belongsTo(datapegawaicon::class, 'id_pegawai');
    // }
}