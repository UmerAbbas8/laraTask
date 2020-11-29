<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('service_id');
            $table->foreignId('vendor_id');
            $table->text('message_for_vendor')->nullable();
            $table->string('status', 50);
            $table->string('payment_method', 100)->nullable();
            $table->json('payment_detail')->default(new Expression('(JSON_ARRAY())'));
            $table->string('payment_status', 100)->nullable();
            $table->foreignId('payment_id')->nullable();
            $table->foreignId('service_history_id')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
