<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['buisness', 'inactive', 'blocked', 'unavailable']);
            $table->string('first_name',50);
            $table->string('last_name',50)->nullable();
            $table->string('phone',20);
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('zip',15);
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('province',30);
            $table->bigInteger('country_id');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('last_modified_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
