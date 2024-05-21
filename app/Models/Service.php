<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
          /*-----------------------------------*/
        'client_name',
        'client_email',
        'client_phone',
          /*-----------------------------------*/
        'start_date',
        'end_forecast',
        'end_date',
          /*-----------------------------------*/
        'service_type',
        'value',
        'description',
          /*-----------------------------------*/
        'status',
        'payment_method',
        'payment_status',
          /*-----------------------------------*/
        'payment_date',
        'payment_value',
        'payment_form',
          /*-----------------------------------*/
        'photo_file',
        'proposal_file',
        'contract_file',
    ];
}
