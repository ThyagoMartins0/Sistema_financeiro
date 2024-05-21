<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_debit',
        'value_debit',
        'date_debit',
        'status_debit',
        'payment_method_debit',
        'payment_status_debit',
        'file_debit',
    ];
}
