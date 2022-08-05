<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelatieComandaProdusSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($count = 0; $count < 10; $count++) {
            DB::table('relatie_comanda_produs')->insert([
                'id_comanda' => rand(1, 100),
                'id_produs' => rand(1, 100),
                'cantitate' => Str::random(10),
                'tva' => Str::random(10),
                'valoare' => Str::random(10)

                // 'updated_at' => date("Y-m-d H:i:s"),
                // 'created_at' => date("Y-m-d H:i:s"),

            ]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
