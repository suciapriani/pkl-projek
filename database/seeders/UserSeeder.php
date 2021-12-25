<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $admin = Role::create([
        'name' => 'admin',
        'display_name' => 'User Administrator'
    ]);

    $pengguna = Role::create([
        'name' => 'pengguna',
        'display_name' => 'User Biasa'
    ]);
    
        $user = new User();
        $user->name = 'Suci Apriani';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
    
        $pengunjung = new User();
        $pengunjung->name = 'pengunjung';
        $pengunjung->email = 'pengunjung@gmail.com';
        $pengunjung->password = Hash::make('12345678');
        $pengunjung->save();

        $user->attachRole($admin);
        $pengunjung->attachRole($pengguna);

        // $user = new User();
        // $user->name = 'altaf faadhil';
        // $user->email = 'altaf@gmail.com';
        // $user->password = Hash::make('02345678');
        // $user->save();

        // $user = new User();
        // $user->name = 'lia amelia';
        // $user->email = 'lia@gmail.com';
        // $user->password = Hash::make('03456789');
        // $user->save();

        // $user = new User();
        // $user->name = 'sifa afna';
        // $user->email = 'sifa@gmail.com';
        // $user->password = Hash::make('04567891');
        // $user->save();
    }
}
