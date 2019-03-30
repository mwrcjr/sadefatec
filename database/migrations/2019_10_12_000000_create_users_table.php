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
            $table->string('name', 90);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('permission', 10)->default('user');
            $table->string('status', 10)->default('active');
            $table->string('step', 1)->default('0');
            $table->string('notes')->nullable();

            $table->integer('course_id')->unsigned()->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->integer('internship_type_id')->unsigned()->nullable();
            $table->foreign('internship_type_id')->references('id')->on('internship_types')->onDelete('cascade');

            $table->string('semester', 4)->nullable();
            $table->year('year')->nullable();
            $table->string('ra', 17)->unique()->nullable();            
            $table->string('phone', 14)->nullable();

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
