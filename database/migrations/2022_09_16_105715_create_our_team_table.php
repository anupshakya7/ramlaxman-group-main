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
        Schema::create('our_team', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('emp_name');
            $table->string('role');
            $table->string('twitter')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkIn')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('youtube')->nullable(true);
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
        Schema::dropIfExists('our_team');
    }
};
