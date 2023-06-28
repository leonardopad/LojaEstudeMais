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
        Schema::create('vendedors', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('endereco');
            $table->timestamps('');
            $table->string('status');
            $table->foreign('venda_id')
                ->references('id')
                ->on('vendedores')
                ->onDelete('cascade');
            $table->foreign('loja_id')
                ->references('id')
                ->on('lojas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('Vendedors');
    }
};
