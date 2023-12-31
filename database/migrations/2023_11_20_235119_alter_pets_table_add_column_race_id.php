<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     private $table = 'pets';
     private $collumn = 'race_id';
     private $foreing = 'pets_race_id_foreign';

    public function up(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
           $table->bigInteger($this->collumn)->after('id');
           $table->foreign($this->collumn)->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->dropForeign($this->foreing); // Correção aqui
           $table->dropColumn($this->collumn);
        });
    }
};
