<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederUserBill extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        for ($count = 0; $count < 10; $count++) {
            DB::table('users_bill')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => Hash::make('secret'),
                'address' => Str::random(10),
                'phone' => Str::random(10),
                'cnp' => Str::random(13),
                'role' => Str::random(1),

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
