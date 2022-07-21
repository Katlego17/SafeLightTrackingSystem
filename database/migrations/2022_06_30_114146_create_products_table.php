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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('SerialNumber');
            $table->string('ElectronicBoardID');
            $table->string('BatteryID');
            $table->string('DateAdded')->nullable();
            $table->string('DatePreCasted')->nullable();
            $table->string('DateCasted')->nullable();
            $table->string('DatePostCasted')->nullable();
            $table->string('DateAssembled')->nullable();
            $table->string('DateStored')->nullable();
            $table->string('DateSold')->nullable();
            $table->string('DateCommissioned')->nullable();
            $table->string('CurrentPhase')->default('added');
            //fields for when the products fails
            $table->string('DateFailed')->nullable();
            $table->string('EnoughVoltCheck')->nullable();
            $table->string('WiringCheck')->nullable();
            $table->string('BoardOutputCheck')->nullable();
            $table->string('DiodeCheck')->nullable();
            $table->string('MeshShotCheck')->nullable();
            $table->string('BubblesCheck')->nullable();
            $table->string('RecycledCheck')->nullable();
            $table->string('Comments')->nullable();
            $table->string('EngineerName')->nullable();
            $table->string('DateSentToEngineer')->nullable();
            //client details
            $table->string('GroupName')->nullable();
            $table->string('Name')->nullable();
            $table->string('Site')->nullable();
            $table->string('Section')->nullable();
            $table->string('Level')->nullable();
            $table->string('Cabinet')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
