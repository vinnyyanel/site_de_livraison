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
        Schema::create('Portfeuilles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('solde');
            $table->timestamps();
            $table->unsignedBigInteger('livreur_id')->nullable();
            $table->unsignedBigInteger('Client_id')->nullable();

            $table->foreign('livreur_id')
            ->references('id')
            ->on('livreurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('Client_id')
            ->references('id')
            ->on('Clients')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unique(['Client_id','livreur_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portefeuille');
    }
};
