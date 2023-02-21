<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Kategori;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
         Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data Penduduk
        siswa::create([
            'nis' => '1103095804960418',
            'kelas' => 'XII TEL 8'
        ]);
        siswa::create([
            'nis' => '1209762804061170',
            'kelas' => 'XII TEL 9'
        ]);
        siswa::create([
            'nis' => '1506926508141921',
            'kelas' => 'XII TEL 10'
        ]);
        
        //input data admin
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}