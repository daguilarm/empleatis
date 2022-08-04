<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            // Profesiones liberales, ténicos y general
            ['type' => 0, 'search_name' => 'Jefe de Proyecto, Project Manager', 'name' => 'Jefe/a de Proyecto', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Jefe de Equipo', 'name' => 'Jefe/a de Equipo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Consultor', 'name' => 'Consultor/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Marketing', 'name' => 'Marketing', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Recursos Humanos, RRHH', 'name' => 'Recursos Humanos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Técnico de Calidad', 'name' => 'Técnico/a de Calidad', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Prevención Riestos Laborales, PRL', 'name' => 'Prevención Riestos Laborales', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Abogado', 'name' => 'Abogado/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Eléctrico', 'name' => 'Ingeniero/a Eléctrico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Industrial', 'name' => 'Ingeniero/a Industrial', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Agrícola, Ingeniero Agrónomo', 'name' => 'Ingeniero/a Agrícola', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Forestal', 'name' => 'Ingeniero/a Forestal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Telocomunicaciones', 'name' => 'Ingeniero/a Telocomunicaciones', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Naval', 'name' => 'Ingeniero/a Naval', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Ingeniero Automatización', 'name' => 'Ingeniero/a Automatización', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Arquitecto, Aparejador, arquitecto técnico', 'name' => 'Arquitecto/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 0, 'search_name' => 'Periodista', 'name' => 'Periodista', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Programación tecnología
            ['type' => 1, 'search_name' => 'Programador', 'name' => 'Programador/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Diseño web', 'name' => 'Desarrollador/a Web', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Ciberseguridad', 'name' => 'Ciberseguridad', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Administrador de Sistemas', 'name' => 'Administrador/a de Sistemas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Analista de Datos', 'name' => 'Analista de Datos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Realidad Virtual', 'name' => 'Realidad Virtual', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Impresión 3D', 'name' => 'Impresión 3D', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Bases de Datos', 'name' => 'Bases de Datos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Inteligencia Artificial', 'name' => 'Inteligencia Artificial', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Comercio Electrónico', 'name' => 'Comercio Electrónico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Marketing Digital', 'name' => 'Marketing Digital', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'UX/UI, frontend', 'name' => 'UX/UI', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Digital Manager', 'name' => 'Digital Manager', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'SEO', 'name' => 'SEO', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Cloud Architect', 'name' => 'Cloud Architect', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Big Data', 'name' => 'Big Data', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Desarrollador de Videojuegos, Gamming', 'name' => 'Desarrollador/a Videojuegos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Diseñador Gráfico', 'name' => 'Diseñador/a Gráfico/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Ingeniero Informática, Software Engenieer, Ingeniero Software', 'name' => 'Ingeniero/a Informática', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 1, 'search_name' => 'Cloud Computing', 'name' => 'Cloud Computing', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Deporte
            ['type' => 8, 'search_name' => 'Natación', 'name' => 'Natación', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Fútbol', 'name' => 'Fútbol', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Boxeo', 'name' => 'Boxeo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Baloncesto', 'name' => 'Baloncesto', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Fitness, aquagym, musculación', 'name' => 'Fitness', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Skateboard', 'name' => 'Skateboard', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 8, 'search_name' => 'Atletismo', 'name' => 'Atletismo', 'created_at' => new DateTime, 'updated_at' => new DateTime],

            // Educacion
            ['type' => 2, 'search_name' => 'Investigador, I+D', 'name' => 'Investigador/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 2, 'search_name' => 'Clases particulares', 'name' => 'Clases particulares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 2, 'search_name' => 'Orientador Laboral', 'name' => 'Orientador/a Laboral', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 2, 'search_name' => 'Profesor primaria', 'name' => 'Profesor/a primaria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 2, 'search_name' => 'Profesor secundaria, profesor instituto', 'name' => 'Profesor/a secundaria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 2, 'search_name' => 'Auxiliar guardería, jardín de infancia', 'name' => 'Auxiliar guardería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Sanitarios
            ['type' => 3, 'search_name' => 'Enfermera, enfermero, matrona', 'name' => 'Enfermero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Médico, medicina', 'name' => 'Médico/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Podólogo', 'name' => 'Podólogo/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Odontólogo, dentista', 'name' => 'Odontólogo/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Fisioterapia', 'name' => 'Fisioterapia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Nutrición, dietética', 'name' => 'Nutrición', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Geriatría', 'name' => 'Geriatría', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Auxiliar Enfermería', 'name' => 'Auxiliar Enfermería', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Celador', 'name' => 'Celador/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Veterinario', 'name' => 'Veterinario/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Óptico, optometrista', 'name' => 'Óptico/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Logopeda', 'name' => 'Logopeda', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Farmacia, farmaceútico', 'name' => 'Farmacia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 3, 'search_name' => 'Técnico de Rayos, Rayos X', 'name' => 'Técnico/a de Rayos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Hostelería
            ['type' => 4, 'search_name' => 'Camarero', 'name' => 'Camarero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 4, 'search_name' => 'Cocinero', 'name' => 'Cocinero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 4, 'search_name' => 'Camarera de Hotel', 'name' => 'Camarera de Hotel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 4, 'search_name' => 'Recepcionista Hotel', 'name' => 'Recepcionista Hotel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 4, 'search_name' => 'Barista', 'name' => 'Barista', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 4, 'search_name' => 'Barman, barmaid, coctelero, mixólogo', 'name' => 'Coctelero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Gestión
            ['type' => 5, 'search_name' => 'Secretaria', 'name' => 'Secretario/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 5, 'search_name' => 'Asistente', 'name' => 'Asistente/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 5, 'search_name' => 'Atención al Cliente', 'name' => 'Atención al Cliente', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 5, 'search_name' => 'Auxiliar Administrativo', 'name' => 'Auxiliar Administrativo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 5, 'search_name' => 'Contable, administrativo', 'name' => 'Administrativo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Ventas
            ['type' => 6, 'search_name' => 'Agente Inmobiliario', 'name' => 'Agente Inmobiliario', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 6, 'search_name' => 'Call Center', 'name' => 'Call Center', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 6, 'search_name' => 'Sales Manager', 'name' => 'Sales Manager', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 6, 'search_name' => 'Comercial', 'name' => 'Comercial', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            // Otros
            ['type' => 7, 'search_name' => 'Exterminador de Plagas', 'name' => 'Exterminador de Plagas/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Dependiente', 'name' => 'Dependiente/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Peón Agrícola', 'name' => 'Peón Agrícola', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Camionero', 'name' => 'Camionero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Pescatero', 'name' => 'Pescatero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Pescador', 'name' => 'Pescador/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Conductor', 'name' => 'Conductor/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Peluquero canino, mascotas, acuarios', 'name' => 'Mascotas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Peluquero, peluquería', 'name' => 'Peluquero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Albañil', 'name' => 'Albañil', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Fontanero', 'name' => 'Fontanero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Electricista', 'name' => 'Electricista', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Vendedor', 'name' => 'Vendedor/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Mecánico', 'name' => 'Mecánico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Cajera', 'name' => 'Cajero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Reponedor', 'name' => 'Reponedor/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Carretillero', 'name' => 'Carretillero/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['type' => 7, 'search_name' => 'Manipulador de Alimentos', 'name' => 'Manipulador/a Alimentos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
