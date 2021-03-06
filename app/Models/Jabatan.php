<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    // memberikan akses data apa saja yang bisa dilihat
    protected $visible = ['jabatan','gaji_pokok','tunjangan_jabatan'];

    protected $fillable = ['jabatan','gaji_pokok','tunjangan_jabatan'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    //membuat relasi one to many
    public function pegawais()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->hasMany('App\Models\pegawai', 'id_jabatan');
    }
    
}
