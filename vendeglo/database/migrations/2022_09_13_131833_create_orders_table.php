<?php

use App\Models\Order;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('customer')->references('id')->on('users');
            $table->foreignId('food')->references('food_id')->on('food');
            $table->integer('delivery_time');
            $table->string('status');
            $table->string('payment_method');
            $table->timestamps();
        });

        Order::create(['customer'=>1, 'food'=>1, 'delivery_time'=>40, 'status'=>'kiszállítva', 'payment_method'=>'Bankkártya']);
        Order::create(['customer'=>2, 'food'=>2, 'delivery_time'=>20, 'status'=>'kiszállítva', 'payment_method'=>'Kézpénz']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
