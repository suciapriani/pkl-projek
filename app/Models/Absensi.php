<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{

    use HasFactory;
    // protected $visible = ['id_karyawan','tgl_absen', 'keterangan'];
    // protected $fillable = ['id_karyawan','tgl_absen', 'keterangan'];
    // public $timestamps = true;

    
    public function pegawais()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\pegawai', 'id_karyawan');
    }
}
