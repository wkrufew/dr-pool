<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('ubication')->nullable();
            $table->string('service_id')->nullable();
            $table->string('service_name')->nullable();
            $table->string('material')->nullable();
            $table->string('sustancia')->nullable();
            $table->string('galon')->nullable();
            $table->text('description')->nullable();
            $table->date('date')->nullable();
            $table->string('day')->nullable();
            $table->text('observation')->nullable();
            $table->string('price')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->enum('status',[1, 2, 3])->default(1);
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
        Schema::dropIfExists('contacts');
    }
}
