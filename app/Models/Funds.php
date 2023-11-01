<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funds extends Model
{
    use HasFactory;

    protected $table = 'funds';
    protected $fillable = [
        'name',
        'status',
        'amount',
    ];

    const _SHOW = 0;
    const _HIDE = 1;
}
