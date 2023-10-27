<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assets extends Model
{
    use HasFactory;
    use SoftDeletes;

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
