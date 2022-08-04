<?php

namespace Database\Seeders;

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
        $this->call([
            RegionSeeder::class,
            ProvinceSeeder::class,
            PartnerSeeder::class,
            CategorySeeder::class,
            LanguageSeeder::class,
        ]);
    }
}
