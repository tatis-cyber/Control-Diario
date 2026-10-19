<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('programacions', function (Blueprint $table) {
            $table->id();
            $table->string('fechaInicio');
            $table->string('fechaFin');
            $table->string('tecnico');
            $table->string('cliente');
            $table->string('sede');
            $table->string('actividad');
            $table->text('observaciones')->nullable();
            $table->string('estado')->default('programada');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programacions');
    }
};