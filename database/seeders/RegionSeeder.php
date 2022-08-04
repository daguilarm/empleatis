<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->delete();

        DB::table('regions')->insert([
            ['alt_name' => 'Andalucía, Andalucia', 'id' => '1', 'country_id' => 1, 'name' => 'Andalucía', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Aragón, Aragon', 'id' => '2', 'country_id' => 1, 'name' => 'Aragón', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Principado de Asturias, Principáu d\'Asturies, Principao d\'Asturias', 'id' => '3', 'country_id' => 1, 'name' => 'Asturias, Principado de', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Islas Baleares, Illes Balears', 'id' => '4', 'country_id' => 1, 'name' => 'Baleares, Islas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Islas Canarias', 'id' => '5', 'country_id' => 1, 'name' => 'Canarias', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cantabria', 'id' => '6', 'country_id' => 1, 'name' => 'Cantabria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Castilla y León, Leon', 'id' => '7', 'country_id' => 1, 'name' => 'Castilla y León', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Castilla la Mancha', 'id' => '8', 'country_id' => 1, 'name' => 'Castilla - La Mancha', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cataluña, Catalunya, Catalonha, ', 'id' => '9', 'country_id' => 1, 'name' => 'Cataluña', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Comunidad Valenciana, Comunitat Valenciana', 'id' => '10', 'country_id' => 1, 'name' => 'Comunidad Valenciana', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Extramadura', 'id' => '11', 'country_id' => 1, 'name' => 'Extramadura', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Galicia', 'id' => '12', 'country_id' => 1, 'name' => 'Galicia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Comunidad de Madrid', 'id' => '13', 'country_id' => 1, 'name' => 'Comunidad de Madrid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Región de Murcia', 'id' => '14', 'country_id' => 1, 'name' => 'Región de Murcia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Comunidad Foral de Navarra', 'id' => '15', 'country_id' => 1, 'name' => 'Comunidad Foral de Navarra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'País Vasco, Euskadi', 'id' => '16', 'country_id' => 1, 'name' => 'País Vasco', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'La Rioja', 'id' => '17', 'country_id' => 1, 'name' => 'La Rioja', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Ceuta', 'id' => '18', 'country_id' => 1, 'name' => 'Ceuta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Melilla', 'id' => '19', 'country_id' => 1, 'name' => 'Melilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
