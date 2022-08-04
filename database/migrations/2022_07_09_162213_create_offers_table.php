<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code', 255); // The offer code from the partner
            $table->string('title');
            $table->text('description');
            $table->text('requirements')->nullable();
            $table->text('url');
            $table->date('date')->nullable();
            $table->integer('region_id')->unsigned()->default(0); // ID from the regions database
            $table->integer('province_id')->unsigned()->default(0); // ID from the provinces database
            $table->string('locations')->nullable(); // For complex location fields
            $table->string('city')->nullable(); // City name
            $table->string('company')->nullable();
            $table->string('source')->nullable();
            $table->integer('category_id')->index()->nullable(); // ID from the provinces database
            $table->integer('language_id')->index()->nullable(); // ID from the provinces database
            $table->json('keywords')->nullable(); // Add keywords as alternative to categories
            $table->integer('contract_id')->nullable(); // Contract type: indefinido, en practicas, etc...
            $table->string('workday_type')->default(0); // config/empleatis
            $table->string('salary')->nullable();
            $table->float('salary_year', 10, 2)->default(0);
            $table->float('salary_max', 10, 2)->default(0);
            $table->float('salary_min', 10, 2)->default(0);
            $table->string('salary_currency', 20);
            $table->string('experience', 150)->nullable();
            $table->integer('study_id')->index()->nullable(); // ID from the studies database
            $table->float('ranking', 10, 2)->default(30); // ID from the studies database
            $table->integer('error_salary')->default(0); // Excesive salary
            $table->integer('error_url')->default(0); // The url is not correct

            // Foreign keys with UUID
            $table->uuid('user_id')->index()->default(1);
            $table->uuid('partner_id')->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
