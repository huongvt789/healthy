<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_name',256);
            $table->string('member_phone',32);
            $table->integer('member_permission')->default(0);
            $table->string('email',256);
            $table->string('password',256);
            $table->integer('id_branch')->unsigned();
            $table->date('age');
            $table->string('certificate',256)->nullable();
            $table->integer('is_deleted')->default(0);
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
        Schema::dropIfExists('members');
    }
}

