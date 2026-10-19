<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('programacions', function (Blueprint $table) {
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->string('tecnico')->nullable();
            $table->string('cliente')->nullable();
            $table->string('sede')->nullable();
            $table->string('actividad')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('estado')->default('programada');
        });
    }

    public function down(): void
    {
        Schema::table('programacions', function (Blueprint $table) {
            $table->dropColumn([
                'fechaInicio',
                'fechaFin',
                'tecnico',
                'cliente',
                'sede',
                'actividad',
                'observaciones',
                'estado',
            ]);
        });
    }
};
