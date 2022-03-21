<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    // protected $visible = ['id_jabatan','nik','gambar', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp'];
    // protected $fillable = ['id_jabatan','nik','gambar', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp'];
    // public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/' . $this->gambar))) {
            return asset('images/' . $this->gambar);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/' . $this->gambar))) {
            return unlink(public_path('images/' . $this->gambar));
        }
    }
    
    public function jabatans()
    {
        // data dari Model "Jabatan" bisa di miliki oleh model "pegawai"
        // melalui fk "id_jabatan"
        return $this->belongsTo('App\Models\jabatan', 'id_jabatan');
    }

    public function absens()
    {
        return $this->hasMany('App\Models\Absensi', 'id_karyawan');
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
