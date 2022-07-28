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
        Schema::create('freebets', function (Blueprint $table) {
            $table->id();
            $table->integer('idGame');
            $table->string('chanel');
            $table->string('event');
            $table->string('web');
            $table->string('typeMember');
            $table->string('ip');
            $table->integer('status');
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
        Schema::dropIfExists('freebets');
    }
};
