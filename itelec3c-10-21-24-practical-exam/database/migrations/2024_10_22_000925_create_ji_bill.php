<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ji_bill', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->char('middleInitial', 2);
            $table->string('email', 255);
            $table->bigInteger('contactNo');
            $table->string('street', 255);
            $table->string('city', 255);
            $table->string('province', 255);
            $table->string('country', 255);
            $table->unsignedInteger('zip');
            $table->unsignedInteger('noOfWatts');
            $table->string('subType', 255);
            $table->double('energyCharge');
            $table->double('disconnection');
            $table->double('latePayment');
            $table->double('totalBill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ji_bill');
    }
};
