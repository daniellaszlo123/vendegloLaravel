<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cim',255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Lakatos Nemzibo','cim'=>'Haragos utca 27','email'=>'lakatosmegyamehbe32@gmail.com']);
        User::create(['name'=>'Molnár Anikó','cim'=>'Glükőz út 132','email'=>'anikomama@citromail.hu']);
        User::create(['name'=>'Tekerő-Pataki Amondó','cim'=>'Dohány utca 62','email'=>'pataki1@freemail.hu']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
