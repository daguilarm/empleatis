<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();

        DB::table('provinces')->insert([
            ['alt_name' => 'Albacete', 'id' => '1', 'country_id' => 1, 'region_id' => 8, 'name' => 'Albacete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Ciudad Real', 'id' => '2', 'country_id' => 1, 'region_id' => 8, 'name' => 'Ciudad Real', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cuenca', 'id' => '3', 'country_id' => 1, 'region_id' => 8, 'name' => 'Cuenca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Guadalajara', 'id' => '4', 'country_id' => 1, 'region_id' => 8, 'name' => 'Guadalajara', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Toledo', 'id' => '5', 'country_id' => 1, 'region_id' => 8, 'name' => 'Toledo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Huesca', 'id' => '6', 'country_id' => 1, 'region_id' => 2, 'name' => 'Huesca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Teruel', 'id' => '7', 'country_id' => 1, 'region_id' => 2, 'name' => 'Teruel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Zaragoza', 'id' => '8', 'country_id' => 1, 'region_id' => 2, 'name' => 'Zaragoza', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Ceuta', 'id' => '9', 'country_id' => 1, 'region_id' => 18, 'name' => 'Ceuta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Madrid, Ciudad de Madrid, Madrid Ciudad, Comunidad de Madrid', 'id' => '10', 'country_id' => 1, 'region_id' => 13, 'name' => 'Madrid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Murcia, Región de Murcia, Region de Murcia, Comunidad de Murcia', 'id' => '11', 'country_id' => 1, 'region_id' => 14, 'name' => 'Murcia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Melilla, Ciudad de Melilla, Ciudad Autónoma de Melilla, Ciudad Autonoma de Melilla', 'id' => '12', 'country_id' => 1, 'region_id' => 19, 'name' => 'Melilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Navarra', 'id' => '13', 'country_id' => 1, 'region_id' => 15, 'name' => 'Navarra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Almería, Almeria', 'id' => '14', 'country_id' => 1, 'region_id' => 1, 'name' => 'Almería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cádiz, Cadiz', 'id' => '15', 'country_id' => 1, 'region_id' => 1, 'name' => 'Cádiz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Córdoba, Cordoba, Cordova, Córdova', 'id' => '16', 'country_id' => 1, 'region_id' => 1, 'name' => 'Córdoba', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Granada', 'id' => '17', 'country_id' => 1, 'region_id' => 1, 'name' => 'Granada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Huelva', 'id' => '18', 'country_id' => 1, 'region_id' => 1, 'name' => 'Huelva', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Jaén, Jaen', 'id' => '19', 'country_id' => 1, 'region_id' => 1, 'name' => 'Jaén', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Málaga, Malaga', 'id' => '20', 'country_id' => 1, 'region_id' => 1, 'name' => 'Málaga', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Sevilla', 'id' => '21', 'country_id' => 1, 'region_id' => 1, 'name' => 'Sevilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Asturias, Principado de Asturias', 'id' => '22', 'country_id' => 1, 'region_id' => 3, 'name' => 'Asturias', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cantabria', 'id' => '23', 'country_id' => 1, 'region_id' => 6, 'name' => 'Cantabria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Ávila, Avila', 'id' => '24', 'country_id' => 1, 'region_id' => 7, 'name' => 'Ávila', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Burgos', 'id' => '25', 'country_id' => 1, 'region_id' => 7, 'name' => 'Burgos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'León, Leon, Provincia de Leon', 'id' => '26', 'country_id' => 1, 'region_id' => 7, 'name' => 'León', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Palencia', 'id' => '27', 'country_id' => 1, 'region_id' => 7, 'name' => 'Palencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Salamanca', 'id' => '28', 'country_id' => 1, 'region_id' => 7, 'name' => 'Salamanca', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Segovia', 'id' => '29', 'country_id' => 1, 'region_id' => 7, 'name' => 'Segovia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Soria', 'id' => '30', 'country_id' => 1, 'region_id' => 7, 'name' => 'Soria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Valladolid', 'id' => '31', 'country_id' => 1, 'region_id' => 7, 'name' => 'Valladolid', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Zamora', 'id' => '32', 'country_id' => 1, 'region_id' => 7, 'name' => 'Zamora', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Barcelona, Ciutat de Barcelona', 'id' => '33', 'country_id' => 1, 'region_id' => 9, 'name' => 'Barcelona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Gerona, Girona', 'id' => '34', 'country_id' => 1, 'region_id' => 9, 'name' => 'Gerona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Lérida, Lerida, Lleida', 'id' => '35', 'country_id' => 1, 'region_id' => 9, 'name' => 'Lérida', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Tarragona', 'id' => '36', 'country_id' => 1, 'region_id' => 9, 'name' => 'Tarragona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Badajoz', 'id' => '37', 'country_id' => 1, 'region_id' => 11, 'name' => 'Badajoz', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Cáceres, Caceres', 'id' => '38', 'country_id' => 1, 'region_id' => 11, 'name' => 'Cáceres', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Coruña, La Coruña, A Coruña', 'id' => '39', 'country_id' => 1, 'region_id' => 12, 'name' => 'La Coruña', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Lugo', 'id' => '40', 'country_id' => 1, 'region_id' => 12, 'name' => 'Lugo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Orense, Ourense', 'id' => '41', 'country_id' => 1, 'region_id' => 12, 'name' => 'Orense', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Pontevedra', 'id' => '42', 'country_id' => 1, 'region_id' => 12, 'name' => 'Pontevedra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'La Rioja, Rioja', 'id' => '43', 'country_id' => 1, 'region_id' => 17, 'name' => 'La Rioja', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Islas Baleares, Baleares, Illes Balears, Balears', 'id' => '44', 'country_id' => 1, 'region_id' => 4, 'name' => 'Islas Baleares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Álava, Alava, Araba', 'id' => '45', 'country_id' => 1, 'region_id' => 16, 'name' => 'Álava', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Guipúzcoa, Guipuzcoa, Gipuzkoa', 'id' => '46', 'country_id' => 1, 'region_id' => 16, 'name' => 'Guipúzcoa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Vizcaya, Bizkaia', 'id' => '47', 'country_id' => 1, 'region_id' => 16, 'name' => 'Vizcaya', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Las Palmas, Palmas', 'id' => '48', 'country_id' => 1, 'region_id' => 5, 'name' => 'Las Palmas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Tenerife', 'id' => '49', 'country_id' => 1, 'region_id' => 5, 'name' => 'Santa Cruz de Tenerife', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Alicante, Alacant', 'id' => '50', 'country_id' => 1, 'region_id' => 10, 'name' => 'Alicante', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Castellón, Provincia de Castellón, Castelló', 'id' => '51', 'country_id' => 1, 'region_id' => 10, 'name' => 'Castellón', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['alt_name' => 'Valencia, València', 'id' => '52', 'country_id' => 1, 'region_id' => 10, 'name' => 'Valencia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
