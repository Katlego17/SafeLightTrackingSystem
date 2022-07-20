<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mine_sites', function (Blueprint $table) {
            $table->unsignedBigInteger('mine_name_id')->after('id')->nullable();
            $table->foreign('mine_name_id')->references('id')->on('mine_names')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mine_sites', function (Blueprint $table) {
            //
        });
    }
};
