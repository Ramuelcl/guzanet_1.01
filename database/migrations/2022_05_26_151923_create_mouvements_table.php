<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMouvementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('mouvements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('compte_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('date')->nullable();
            $table->string('libell')->nullable();
            $table->decimal('montant', 10, 2)->default(0);
            $table->unsignedTinyInteger('id_tipo')->default(0);
            $table->foreignId('tabla_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamp('dateFiniched')->nullable();
            $table->unsignedTinyInteger('id_error')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mouvements');
    }
}
