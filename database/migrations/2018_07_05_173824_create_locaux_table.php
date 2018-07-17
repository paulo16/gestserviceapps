<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locaux', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('niveau')->nullable();
            $table->string('zone')->nullable();
            $table->string('designation')->nullable();
            $table->string('sol')->nullable();
            $table->string('plafonds')->nullable();
            $table->string('murs')->nullable();
            $table->unsignedInteger('service_id')->nullable();
            $table->timestamps();
        });

        Schema::table('locaux', function (Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')
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
        Schema::table('locaux', function (Blueprint $table) {
            $table->dropForeign(['service_id']);
        });

        Schema::dropIfExists('locaux');

    }
}
