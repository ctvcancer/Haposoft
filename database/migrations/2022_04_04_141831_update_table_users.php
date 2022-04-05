<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->datetime('birth')->nullable();
            $table->string('about')->nullable();
            $table->string('avatar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropcolum('role');
            Schema::dropcolum('fullname');
            Schema::dropcolum('phone');
            Schema::dropcolum('address');
            Schema::dropcolum('birth');
            Schema::dropcolum('about');
            Schema::dropcolum('avatar');
    });
}
}
