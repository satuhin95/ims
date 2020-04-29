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
             $table->string('name');
            $table->string('email')->nullable();
            $table->string('contact');
            $table->string('address');
            $table->string('shopname')->nullable();
            $table->string('acount_name')->nullable();
            $table->string('acount_number')->nullable();
            $table->string('banck_name')->nullable();
            $table->string('banck_branch')->nullable();
            $table->string('picture')->nullable();
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
