<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $table = 'Assets';
    protected $fillable = [
        'name',
        'asset_type_id',
        'description',
        'status',
        'images',
        'contract_id',
    ];
    public $timestamps = true;
}
