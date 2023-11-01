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

    const _DONG_LAI = 0;
    const _DA_DONG = 1;

    public static function getDescStatus($codeStatus)
    {
        try {
            $codeStatus = intval($codeStatus);
            $result = "Undefined";
            switch ($codeStatus) {
                case self::_DEFAULT: {
                        $result = "Đóng lãi";
                        break;
                    }
                case self::_DA_DONG: {
                        $result = "Đã đóng";
                        break;
                    }
                default: {
                        $result = "Undefined";
                        break;
                    }
            }

            return $result;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
