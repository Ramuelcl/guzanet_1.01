<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tablas', function (Blueprint $table) {
            $table->id();
            $table->integer('idTabla');
            $table->integer('code');
            $table->string('name', 50)->nullable();
            $table->string('slug', 100)->unique()->nullable();
            $table->string('valor', 50)->nullable();
            $table->foreignId('color_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ["activo","inactivo"])->default('activo')->nullable();
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
        Schema::dropIfExists('tablas');
    }
}
