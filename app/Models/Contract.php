<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'number',
        'name',
        /*--------   EMPRESA  ------------*/
        'company_name',
        'cnpj',
        'address',
        'city',
        'state',
        'zip_code',
        'phone',
        'email',
        'site',
        'responsible_name',
        'responsible_cpf',
        /*--------  CLIENTE  ------------*/
        'client_name',
        'client_document',
        'client_address',
        'client_city',
        'client_state',
        'client_zip_code',
        'client_phone',
        'client_email',
        /*--------  DETALHES DO CONTRATO  ------------*/
        'name_project',
        'service_type',
        'description',
        'manutention',
        /*--------  DATAS E PRAZO  ------------*/
        'start_date',
        'end_forecast',
        /*--------  FORMAS DE PAGAMENTO  ------------*/
        'payment_method',
        'payment_date',
        'payment_value',
      
    ];
}
