<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->date('birth');
            $table->string('phone')->unique();
            $table->string('password');
            $table->text('summary');
            $table->string('classification')->nullable();
            $table->date('received_date')->nullable();
            $table->string('consulting_count')->nullable();
            $table->string('consulting_date')->nullable();
            $table->string('event_status')->nullable();
            $table->string('paid')->nullable();
            $table->string('closing')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
