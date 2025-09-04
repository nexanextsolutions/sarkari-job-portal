<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_applied')->nullable();
            $table->string('category')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizen')->nullable();
            $table->string('full_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('pan')->nullable();
            $table->string('father')->nullable();
            $table->string('location')->nullable();
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable(); 
            $table->string('fees')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('razorpay_id')->nullable();
            $table->boolean('payment_done')->default(false);
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
        Schema::dropIfExists('regs');
    }
}
