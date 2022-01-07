<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $visible = ['id_karyawan','id_jabatan','lemburan', 'potongan', 'jumlah'];
    protected $fillable = ['id_karyawan','id_jabatan','lemburan', 'potongan', 'jumlah'];
    public $timestamps = true;

    
    public function pegawais()
    {
        // data dari Model "pegawai" bisa di miliki oleh model "penggajian"
        // melalui fk "penggajian_id"
        return $this->belongsTo('App\Models\pegawai', 'id_karyawan');
    }
    public function jabatan()
    {
        return $this->hasMany('App\Models\jabatan', 'id_jabatan');
    }
}
