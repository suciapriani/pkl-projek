<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $visible = ['nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','jabatan','golongan'];
    protected $fillable = ['nik', 'nama', 'alamat','tgl_lahir','jenis_kelamin','no_telp','jabatan','golongan'];
    public $timestamps = true;

    
    public function jabatans()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\jabatan', 'id_jabatan');
    }
}
