<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();

        DB::table('languages')->insert([
            ['top' => 1, 'name' => 'Python', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'JavaScript', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Java', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Go-lang', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'C++', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Ruby', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'PHP', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'C#', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Kotlin', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Swift', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'PowerShell', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Visual Basic', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Sql', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Scala', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 1, 'name' => 'Rust', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'TypeScript', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Shell', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Nix', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Dart', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Elixir', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Groovy', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Perl', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Objective-C', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Haskell', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Erlang', 'type' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Mongo', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'SQLite', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Cassandra', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'PostgreSQL', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'MariaDB', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Titan', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Oracle', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Redis', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Apache Hive', 'type' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'React', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Vue', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Angular', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Svelte', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Laravel', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Django', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Spring', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Spring-boot', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'jQuery', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Bootstrap', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Tailwind', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'NodeJs', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Flask', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'NextJs', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Rails', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['top' => 0, 'name' => 'Backbone', 'type' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
