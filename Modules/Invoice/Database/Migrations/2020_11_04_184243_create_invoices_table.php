<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number');
            $table->integer('total_price');
            $table->dateTime('date');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")
 /*                ->onDelete("cascade")
                ->onUpdate("cascade") */;
        });
    }

    /**
     * Reverse the migrations.  id, invoice_number, date, total_price, user_id
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
