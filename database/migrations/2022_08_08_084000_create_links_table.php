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
        Schema::connection('analytics')
            ->create('links', function (Blueprint $table) {
                $table->id();
                $table->uuid('offer_id');
                $table->string('referer', 32); // Get referer ID.
                $table->unsignedBigInteger('category_id');
                $table->unsignedBigInteger('language_id');
                $table->unsignedBigInteger('province_id'); // ID from the provinces database
                $table->string('device_type'); // Desktop, table or mobile
                $table->string('device_name', 120); // Get the device name.
                $table->string('robot', 120)->nullable(); // If robot, robot name
                $table->string('platform', 120); // Get the operating system.
                $table->string('browser', 120); // Get the operating system.
                $table->float('salary_year', 10, 2)->nullable();
                $table->float('ranking', 10, 2); // Ranking
                $table->string('workday_type'); // config/empleatis
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
        Schema::dropIfExists('links');
    }
};
