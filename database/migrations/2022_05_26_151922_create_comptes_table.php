<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('banca_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('numero', 20)->nullable()->default(null);
            $table->unsignedTinyInteger('id_type')->default(0);
            $table->string('devise', 2)->default('€');
            $table->decimal('solde', 10, 2)->default(0);
            $table->timestamp('date')->nullable();
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
        Schema::dropIfExists('comptes');
    }
}
