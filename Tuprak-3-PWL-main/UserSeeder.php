<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

use function Symfony\Component\Clock\now;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data =[
            'username'=>$faker->name(),
            'nama_depan'=>$faker->name(),
            'nama_belakang'=>$faker->name(),
            'email'=>$faker->email(),
            'email_diverifikasi_pada'=>now(),
            'password'=>$faker->password(),
            'created_at'=>now(),
            'updated_at'=>now()

        ];
        DB::table('user')->insert($data);
    }
}
