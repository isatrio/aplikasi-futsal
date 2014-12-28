<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddHargaSiangToLapangan extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('lapangan', function(Blueprint $table) {
            $table->bigInteger('harga_siang')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('lapangan', function(Blueprint $table) {
            $table->dropColumn('harga_siang');
        });
    }

}