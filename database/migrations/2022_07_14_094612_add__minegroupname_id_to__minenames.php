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
        Schema::table('mine_names', function (Blueprint $table) {
            $table->unsignedBigInteger('mine_group_name_id')->after('id')->nullable();
            $table->foreign('mine_group_name_id')->references('id')->on('mine_group_names')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mine_names', function (Blueprint $table) {
            //
        });
    }
};
