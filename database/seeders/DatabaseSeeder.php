<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        
        RolesSeeder::class,
        DroitsSeeder::class,
        DroitRolesSeeder::class,
        EntrepriseSeeder::class,
        PromotionsSeeder::class,
        UserSeeder::class,
        OffreSeeder::class,
        
    ]);

    }
}
