<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->id("id_tarefa");
            $table->string("titulo_tarefa");
            $table->string("descricao_tarefa")->nullable(true);
            $table->dateTime("data_inicio_tarefa");
            $table->dateTime("data_termino_tarefa")->nullable(true);
            $table->foreignId("id_usuario")->constrained("users", "id");
            $table->foreignId("id_categoria")->nullable(true)->constrained("categoria", "id_categoria");
            $table->foreignId("id_status_tarefa")->constrained("status_tarefa", "id_status_tarefa");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefa');
    }
};
