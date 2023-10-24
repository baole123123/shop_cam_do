<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;
    protected $table = 'Contracts';
    protected $fillable = [
        'customer_id',
        'customer_phone',
        'customer_name',
        'customer_identi',
        'customer_birthday',
        'customer_image',
        'contract_type_id',
        'asset_id',
        'total_loan',
        'interest_payment_period',
        'interest_rate',
        'date_paid',
        'note',
        'image',
        'user_id',
    ];
    public $timestamps = true;
}
