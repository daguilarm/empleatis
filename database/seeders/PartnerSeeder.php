<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->delete();

        DB::table('partners')->insert([
            ['id' => 1, 'name' => 'Opcionempleo', 'url' => 'https://www.opcionempleo.com/', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Jooble', 'url' => 'https://es.jooble.org/', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Tecnoempleo', 'url' => 'https://www.tecnoempleo.com/', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
