<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Query\Expression;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id');
            $table->string('name', 100);
            $table->json('detail')->default(new Expression('(JSON_ARRAY())'));
            $table->string('type', 100);
            $table->string('category', 100);
            $table->string('sub_category', 100)->nullable();
            $table->float('price');
            $table->string('discount_type', 100)->nullable();
            $table->float('discount')->nullable();
            $table->string('tax_type', 100)->nullable();
            $table->float('tax')->nullable();
            $table->string('status', 50);
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
        Schema::dropIfExists('services');
    }
}
