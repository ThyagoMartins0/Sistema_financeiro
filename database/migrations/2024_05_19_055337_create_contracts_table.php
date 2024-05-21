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
            $table->string('name');
            /*--------   EMPRESA  ------------*/
            $table->string('company_name');
            $table->string('cnpj');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('phone');
            $table->string('email');
            $table->string('site');
            $table->string('responsible_name');
            $table->string('responsible_cpf');     

             /*--------  CLIENTE  ------------*/
            $table->string('client_name');
            $table->string('client_document');
            $table->string('client_address');
            $table->string('client_city');
            $table->string('client_state');
            $table->string('client_zip_code');
            $table->string('client_phone');
            $table->string('client_email');
            

              /*--------  DETALHES DO CONTRATO  ------------*/
            $table->string('name_project');
            $table->string('service_type');
            $table->Text('description');
            $table->string('manutention');
            


              /*--------  DATAS E PRAZO  ------------*/
            $table->date('start_date');
            $table->date('end_forecast');
    

              /*--------  FORMAS DE PAGAMENTO  ------------*/
            $table->string('payment_method');
            $table->string('payment_date');
            $table->string('payment_value');






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
