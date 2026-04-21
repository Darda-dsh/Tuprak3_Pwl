<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\factory as faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $kategori = [
        [
            'kategori' => 'pemrograman',
            'created_at'=> now(),
            'updated_at'=>now()
        ],

        [
            'kategori' => 'Bahasa',
            'created_at'=> now(),
            'updated_at'=>now()
        ],

        [
            'kategori' => 'Matematika',
            'created_at'=> now(),
            'updated_at'=>now()
        ]
       ];
       DB::table('categories')->insert($kategori);
    }
}
