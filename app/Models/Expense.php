<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'contract_id',
        'amount',
        'note',
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id');
    }
    public $timestamps = true;
}
