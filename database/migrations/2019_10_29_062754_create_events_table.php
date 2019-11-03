<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->text('url_imagen_principal');
            $table->dateTime('fecha');
            $table->integer('estado');
            $table->integer('numero_invitados');
            $table->timestamps();
        });
        Schema::table('events', function($table) {
            $table->unsignedBigInteger('anfitrion');
            $table->foreign('anfitrion')->references('id')->on('organizers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
