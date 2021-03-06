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
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ciudad_id')
            ->nullable()
            ->constrained('ciudad')
            ->nullOnDelete();
            $table->string('nombre')->nullable();
            $table->bigInteger('identificacion')->nullable();
            $table->string('correo')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
};
