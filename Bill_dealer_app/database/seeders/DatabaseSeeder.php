<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ClientFactory;
use App\Models\Client;
use App\Models\Comanda;
use App\Models\Company;
use App\Models\Invoice;
use App\Models\Produs;
use App\Models\RelatieComandaProdus;
use App\Models\UsersBill;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     SeederUserBill::class,
        //     CompanySeeder::class,
        //     ClientsSeeder::class,
        //     ProdusSeeder::class,
        //     RelatieComandaProdusSeeder::class,
        //     ComandaSeeder::class,
        //     InvoiceSeeder::class
        // ]);

        Client::factory(10)->create();
        Comanda::factory(10)->create();
        Invoice::factory(10)->create();
        //Company::factory(10)->create();
        RelatieComandaProdus::factory(10)->create();
        UsersBill::factory(10)->create();
        Produs::factory(10)->create();
    }
}
