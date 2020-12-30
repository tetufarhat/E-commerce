<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOredersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oreders', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('user_id');
            $table->string('customer_name',128);
            $table->string('customer_phone_number',128);
            $table->text('address');
            $table->string('city',32);
            $table->string('post_code',16);
            $table->decimal('total_amount',18,2);
            $table->decimal('discount_amount',18,2)->default(0);
            $table->decimal('paid_amount',10,2);
            $table->string('payment_status',16)->default('pending');
            $table->string('payment_details')->nullable();
            $table->string('operation_status',16)->default('pending');
            $table->unsignedInteger('processed_by')->nullable();
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
        Schema::dropIfExists('oreders');
    }
}
