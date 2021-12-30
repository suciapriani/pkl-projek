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
            ['jabatan'=>'karyawan','golongan'=>'staf',
            'gaji_pokok'=>'RP.2.000.000','tunjangan_jabatan'=>'Rp.50000'],
        

        ];
        //masukan data ke database
        DB::table('jabatans')->insert($jabatan);
    }
}
