<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();                   
            $table->string('username');
            $table->string('email');
			$table->string('password');
            $table->string('first_name');
            $table->string('last_name');           
			$table->text('address');
            $table->string('landmark');
            $table->string('city');
			$table->string('state');
            $table->string('country');
            $table->integer('pincode');           
            $table->integer('status');
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
        Schema::dropIfExists('customers');
    }
}
