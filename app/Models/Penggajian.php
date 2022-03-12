<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $visible = ['id_pegawai','id_lembur', 'id_cuti', 'total'];
    protected $fillable = ['id_pegawai','id_lembur', 'id_cuti', 'total'];
    public $timestamps = true;

    
    public function pegawais()
    {
        return $this->belongsTo('App\Models\pegawai', 'id_pegawai');
    }
    public function lemburs()
    {
        return $this->belongsTo('App\Models\lembur', 'id_lembur');
    }
    public function cutis()
    {
        return $this->belongsTo('App\Models\cuti', 'id_cuti');
    }
}
