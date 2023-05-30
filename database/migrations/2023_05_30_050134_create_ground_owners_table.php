<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroundOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ground_owners', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('ground_id')->nullable();

            $table->index('owner_id','ground_owner_owner_idx');
            $table->index('ground_id','ground_owner_ground_idx');

            $table->foreign('owner_id','ground_owner_owner_fk')->on('owners')->references('id');
            $table->foreign('ground_id','ground_owner_ground_fk')->on('grounds')->references('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ground_owners');
    }
}
