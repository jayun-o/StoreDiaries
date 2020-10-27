<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->date('expensesDate');
            $table->string('expensesName');
            $table->string('expensesMethod');
            $table->string('expensesType');
            $table->double('expensesAmount', 8, 2);
            $table->string('expensesNote');
            //$table->string('expensesAttachment');
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
        Schema::dropIfExists('expenses');
    }
}
