<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->text('description')->nullable();
            $table->integer('quantity_on_hand')->unsigned();
            $table->integer('reorder_level')->unsigned();
            $table->decimal('cost', 10, 2);
            $table->decimal('selling_price', 10, 2);
            $table->text('supplier_info')->nullable();
            $table->string('location')->nullable();
            $table->timestamp('date_received')->nullable();
            $table->timestamp('date_sold')->nullable();
            $table->string('sales_channel')->nullable();
            $table->string('sales_order_number')->nullable();
            $table->string('serial_number')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
