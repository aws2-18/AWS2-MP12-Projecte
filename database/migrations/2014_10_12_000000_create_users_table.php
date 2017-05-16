<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200)->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pais',20)->default('none');
            $table->string('provincia',20)->default('none');
            $table->string('ciudad',20)->default('none');
            $table->string('direccion',20)->default('none');
            $table->integer('cp')->default(00000);
            $table->string('imagen',80)->default('none');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
