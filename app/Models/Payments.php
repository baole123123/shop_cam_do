<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    protected $table = 'Payments';
    protected $fillable = [
        'date_paid',
        'amount',
        'other_fee',
        'customer_name',
        'contract_id',
        'user_id',
    ];
    public $timestamps = true;
}
