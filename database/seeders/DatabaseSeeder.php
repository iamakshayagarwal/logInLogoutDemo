<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;
use App\Models\categorie;
use App\Models\Scategorie;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(20)->create();
        \App\Models\Customer::factory(20)->create();
        \App\Models\Categorie::factory(20)->create();
        \App\Models\Scategorie::factory(20)->create();
        \App\Models\Product::factory(20)->create();

    }
}
