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
        Schema::create('mp3s', function (Blueprint $table) {
            $table->id();
            $table->string('source_disk')->nullable();
            $table->string('source_path')->nullable();
            $table->string('dest_path')->nullable();
            $table->string('dest_disk')->nullable();
            $table->decimal('duration', 10, 2)->nullable();
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
        Schema::dropIfExists('mp3s');
    }
};
