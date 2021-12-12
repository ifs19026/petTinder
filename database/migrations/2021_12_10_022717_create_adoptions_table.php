<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('adoptions', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('age');
                $table->string('breed');
                $table->string('color');
                $table->string('weight');
                $table->text('detail');
                $table->string('image');
                $table->string('gender');
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
        Schema::dropIfExists('adoptions');
    }
}
