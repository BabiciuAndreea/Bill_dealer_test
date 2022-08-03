<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($count = 0; $count < 10; $count++) {
            DB::table('company')->insert([
                'company_name' => Str::random(10),
                'cif' => Str::random(10),
                'company_id' => Str::random(10),
                'city' => Str::random(10),
                'county' => Str::random(10),
                'address' => Str::random(13),
                'caen' => Str::random(10),
                'capital' => Str::random(10),
                'tva' => Str::random(10),
                'iban' => Str::random(13),
                'format_pdf' => Str::random(10),

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
