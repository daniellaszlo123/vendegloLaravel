<?php

use App\Models\Food;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id('food_id');
            $table->string('name', 30);
            $table->string('description', 100)->nullable();
            $table->string('category', 30);
            $table->integer('time');
            $table->timestamps();
        });

        Food::create(['name'=>'bableves', 'category'=>'leves', 'time'=>30]);
        Food::create(['name'=>'palacsinta', 'category'=>'desszert', 'time'=>20]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
