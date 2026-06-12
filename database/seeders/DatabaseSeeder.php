<?php

namespace Database\Seeders;

use App\Models\KategoriArtikel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['user_name' => 'admin'],
            [
                'nama_depan' => 'Firman',
                'nama_belakang' => 'Fadilah Noor',
                'password' => Hash::make('password'),
                'foto' => 'firman-profile.jpg',
            ]
        );

        KategoriArtikel::firstOrCreate(
            ['nama_kategori' => 'Umum'],
            ['keterangan' => 'Kategori umum untuk artikel blog.']
        );
    }
}
