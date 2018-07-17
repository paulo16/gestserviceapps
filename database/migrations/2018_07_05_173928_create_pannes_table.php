<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePannesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pannes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->unsignedInteger('etat_id')->nullable();
            $table->unsignedInteger('local_id')->nullable();
            $table->unsignedInteger('appareil_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->timestamps();
        });

        Schema::table('pannes', function (Blueprint $table) {
            $table->foreign('local_id')->references('id')->on('locaux')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('pannes', function (Blueprint $table) {
            $table->foreign('appareil_id')->references('id')->on('appareils')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('pannes', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('pannes', function (Blueprint $table) {
            $table->foreign('etat_id')->references('id')->on('etatspanne')
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
        Schema::table('pannes', function (Blueprint $table) {
            $table->dropForeign(['local_id']);
            $table->dropForeign(['appareil_id']);
            $table->dropForeign(['etat_id']);
            $table->dropForeign(['category_id']);
        });
        Schema::dropIfExists('pannes');
    }
}
