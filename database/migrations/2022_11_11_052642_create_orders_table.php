<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_cart_id'); // корзина
                $table->unsignedBigInteger('order_item_id'); // подарок
                $table->timestamps();
                $table->foreign('user_cart_id')
                    ->references('id')
                    ->on('user_carts')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->foreign('order_item_id')
                    ->references('id')
                    ->on('order_items')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('orders')) {
            Schema::dropIfExists('orders');
        }
    }
}
