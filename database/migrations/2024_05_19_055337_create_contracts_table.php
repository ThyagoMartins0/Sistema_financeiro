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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            /*-----------------------------------*/
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_phone');
            /*-----------------------------------*/
            $table->date('start_date');
            $table->date('End_forecast');
            $table->date('end_date');
            /*-----------------------------------*/
            $table->text('service_type');
            $table->interger('value');
            $table->text('description');
            /*-----------------------------------*/
            $table->string('status');
            $table->string('payment_method');
            $table->string('payment_status');
            /*-----------------------------------*/
            $table->string('payment_date');
            $table->string('payment_value');
            $table->string('payment_form');
            /*-----------------------------------*/
            $table->string('photo_file');//photo of the contract
            $table->string('proposal_file');//proposal of the contract
            $table->string('contract_file');//contract file


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
