<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table = 'Customers';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date',
        'identification',
        'id_image_front',
        'id_image_back',
        'image_user',
        'status',
    ];
    public $timestamps = true;
}
