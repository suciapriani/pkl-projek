<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jabatan = [
            ['jabatan'=>'karyawan','golongan'=>'Pegawai','gaji_pokok'=>'2000000','tunjangan_jabatan'=>'50000'],
            ['jabatan'=>'HRD','golongan'=>'Pegawai','gaji_pokok'=>'2500000','tunjangan_jabatan'=>'50000'],
            ['jabatan'=>'Menejer','golongan'=>'Staf','gaji_pokok'=>'3000000','tunjangan_jabatan'=>'50000'],
            ['jabatan'=>'Sekertaris','golongan'=>'Admin','gaji_pokok'=>'3500000','tunjangan_jabatan'=>'50000'],


        ];
        //masukan data ke database
        DB::table('jabatans')->insert($jabatan);
    }
}
