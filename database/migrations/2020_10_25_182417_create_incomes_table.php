<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->date('incomeDate');
            $table->string('incomeName');
            $table->string('incomeMethod');
            $table->string('incomeType');
            $table->double('incomeAmount', 8, 2);
            $table->string('incomeNote');
            //$table->string('incomeAttachment');
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
        Schema::dropIfExists('incomes');
    }
}