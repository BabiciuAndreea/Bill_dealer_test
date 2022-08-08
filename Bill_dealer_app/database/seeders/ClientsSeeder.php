<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($count = 0; $count < 10; $count++) {
            DB::table('client')->insert([
                'client_name' => Str::random(10),
                'cif' => Str::random(10),
                'nr_reg' => 'RO' . Str::random(10),
                'city' => Str::random(10),
                'county' => Str::random(10),
                'address' => Str::random(10),
                'phone' => Str::random(10),
                'email' => Str::random(10) . '@gamil.com'
            ]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
