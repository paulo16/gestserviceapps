<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->text('details')->nullable();
            $table->date('date_cloture')->nullable();
            $table->unsignedInteger('etat_id')->nullable();
            $table->unsignedInteger('panne_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
        });

        Schema::table('demandes', function (Blueprint $table) {
            $table->foreign('etat_id')->references('id')->on('etatsdemande')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('demandes', function (Blueprint $table) {
            $table->foreign('panne_id')->references('id')->on('pannes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('demandes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
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

        Schema::table('demandes', function (Blueprint $table) {
            $table->dropForeign(['etat_id']);
            $table->dropForeign(['panne_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('demandes');
    }
}
