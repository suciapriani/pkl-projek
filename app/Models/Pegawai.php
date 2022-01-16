<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $visible = ['id_jabatan','nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','golongan'];
    protected $fillable = ['id_jabatan','nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','golongan'];
    public $timestamps = true;

    
    public function jabatans()
    {
        // data dari Model "Jabatan" bisa di miliki oleh model "pegawai"
        // melalui fk "id_jabatan"
        return $this->belongsTo('App\Models\jabatan', 'id_jabatan');
    }
    public function lemburs()
    {
        return $this->hasMany('App\Models\lembur', 'id_karyawan');
    }

    public function cutis()
    {
        return $this->hasMany('App\Models\cuti', 'id_kar');
    }

    public function penggajians()
    {
        return $this->hasMany('App\Models\penggajian', 'id_pegawai');
    }
}
