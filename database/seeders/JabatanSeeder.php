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
            ['jabatan'=>'Karyawan','gaji_pokok'=>'2000000','tunjangan_jabatan'=>'50000'],
            ['jabatan'=>'Admin','gaji_pokok'=>'2500000','tunjangan_jabatan'=>'50000'],
            ['jabatan'=>'Menejer','gaji_pokok'=>'3000000','tunjangan_jabatan'=>'50000'],
        ];
        //masukan data ke database
        DB::table('jabatans')->insert($jabatan);
    }
}
