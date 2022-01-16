<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    use HasFactory;
    protected $visible = ['id_kar','nik','tgl_cuti', 'jumlah'];
    protected $fillable = ['id_kar','nik','tgl_cuti', 'jumlah'];
    public $timestamps = true;

    
    public function pegawais()
    {
        // data dari Model "Book" bisa di miliki oleh model "Author"
        // melalui fk "author_id"
        return $this->belongsTo('App\Models\pegawai', 'id_kar');
    }
    public function penggajians()
    {
        return $this->hasMany('App\Models\lembur', 'id_lembur');
    }
}
