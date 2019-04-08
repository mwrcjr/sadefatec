<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('policy', 45)->nullable();
            $table->string('insurer', 45)->nullable();
            $table->string('rg', 12);
            $table->string('cpf', 14)->unique();

            $table->string('street', 90);
            $table->string('number', 9);
            $table->string('district', 45);
            $table->string('city', 45);
            $table->string('state', 2);
            $table->string('complement', 45)->nullable();
            $table->string('phonerec', 15);
            $table->string('phonehome', 15)->nullable();

            $table->string('company');
            $table->string('cnpj', 18);
            $table->string('cstreet', 90);
            $table->string('cnumber', 9);
            $table->string('cdistrict', 45);
            $table->string('ccity', 45);
            $table->string('cstate', 2);
            $table->string('cphone', 15);
            $table->string('cemail', 100);
            $table->string('cagent', 90);
            $table->string('cagentrg', 12);
            $table->string('responsible', 45);
            $table->date('agreement');

            $table->string('supervisor', 90);
            $table->string('supervisorrole', 45);
            $table->string('semail', 100);
            $table->string('sphone', 15);
            $table->string('istreet', 90)->nullable();
            $table->string('inumber', 9)->nullable();
            $table->string('idistrict', 45)->nullable();
            $table->string('icity', 45)->nullable();
            $table->string('istate', 2)->nullable();
            $table->date('initialdate');
            $table->date('enddate');
            $table->time('initialtime');
            $table->time('endtime');
            $table->string('acting', 45);
            $table->decimal('payment', 8, 2);
            $table->longText('activities');

            $table->string('status', 9)->default('sent');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('data');
    }
}
