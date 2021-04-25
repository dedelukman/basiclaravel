<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('servis1_title');
            $table->text('servis1_contain');
            $table->string('servis2_title');
            $table->text('servis2_contain');
            $table->string('servis3_title');
            $table->text('servis3_contain');
            $table->string('servis4_title');
            $table->text('servis4_contain');
            $table->string('servis5_title');
            $table->text('servis5_contain');
            $table->string('servis6_title');
            $table->text('servis6_contain');
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
        Schema::dropIfExists('servis');
    }
}
