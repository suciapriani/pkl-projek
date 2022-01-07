<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $visible = ['id_jabatan','nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','jabatan','golongan'];
    protected $fillable = ['id_jabatan','nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','jabatan','golongan'];
    public $timestamps = true;

    
    public function jabatans()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\jabatan', 'id_jabatan');
    }
    public function lemburs()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->hasMany('App\Models\lembur', 'id_karyawan');
    }
    public function cutis()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->hasMany('App\Models\cuti', 'id_kar');
    }
}
