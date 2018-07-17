<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppareilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appareils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedInteger('local_id')->nullable();
            $table->timestamps();
        });

        Schema::table('appareils', function (Blueprint $table) {
            $table->foreign('local_id')->references('id')->on('locaux')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appareils', function (Blueprint $table) {
            $table->dropForeign(['local_id']);
        });
        Schema::dropIfExists('appareils');
    }
}
