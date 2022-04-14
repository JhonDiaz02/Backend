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
        Schema::create('alumno_curso', function (Blueprint $table) {

            $table->id();
            $table->foreignId('alumno_id')
            ->nullable()
            ->constrained('alumno')
            ->nullOnDelete();
            $table->foreignId('curso_id')
            ->nullable()
            ->constrained('curso')
            ->nullOnDelete();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('alumno_curso');
    }
};
