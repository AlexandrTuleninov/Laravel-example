<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informs', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->unique();
            $table->string('text');

            $table->index('id','ground_inform_id_idx');

            $table->foreign('id','ground_indofm_id_fk')->on('grounds')->references('id');
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
        Schema::dropIfExists('informs');
    }
}
