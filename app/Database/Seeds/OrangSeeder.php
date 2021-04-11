<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

use CodeIgniter\Database\Seeder;


class OrangSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        dd($faker->name);
        $data = [
            [
                'nama' => 'Anggita Putri Maharani',
                'alamat'    => 'Bekasi',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Danang Aji Pangestu',
                'alamat'    => 'Rawalumbu',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ],
            [
                'nama' => 'Winda Antika Putri',
                'alamat'    => 'Depok',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ]

        ];

        // Simple Queries
        // $this->db->query("INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
        $this->db->table('orang')->insertBatch($data);
    }
}
