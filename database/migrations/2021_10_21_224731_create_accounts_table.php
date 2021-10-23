<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('user_id');
            $table->string('acct_name',90);
            $table->decimal('init_invest',10,2);
            $table->date('start_date');
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->primary('id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
