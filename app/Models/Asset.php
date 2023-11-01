<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory;

    protected $table = 'assets';
    protected $fillable = [
        'name',
        'asset_type_id',
        'description',
        'status',
        'images',
        'contract_id',
    ];
    public $timestamps = true;

    const _DEFAULT = 0;
    const _CAM_CO = 1;
    const _DA_TRA = 2;

    public static function getDescStatus($codeStatus)
    {
        try {
            $codeStatus = intval($codeStatus);
            $result = "Undefined";
            switch ($codeStatus) {
                case self::_DEFAULT: {
                        $result = "Mặc định";
                        break;
                    }
                case self::_CAM_CO: {
                        $result = "Cầm cố";
                        break;
                    }
                case self::_DA_TRA: {
                        $result = "Đã trả";
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
