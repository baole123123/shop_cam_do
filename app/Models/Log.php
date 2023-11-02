<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Log extends Model
{
    use HasFactory;

    public static function addLog($modelName,$actionName,$objectId = 0,$note = ''){
        $user_id = 1;
        if (Auth::check()) {
            $user_id = Auth::id();
        }
        $item = new Log();
        $item->model_name = $modelName;
        $item->object_id = $objectId;
        $item->action_name = $actionName;
        $item->user_id = $user_id;
        $item->save();
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getDescriptionAttribute(){
        $sections = [
            'Contract' => 'Hợp đồng',
            'Asset' => 'Tài sản',
            'Customer' => 'Khách hàng',
            'Fund' => 'Quỹ',
            'Payment' => 'Thanh toán',
            'User' => 'Nhân viên',
        ];
        $model_name     = $this->model_name;
        $action_name    = $this->action_name;
        $id             = $this->object_id;
        $user_id        = $this->user_id;
        $user = User::find($user_id); 
        $user_name = $user ? $user->name : 'Hệ thống';
        $section = !empty($sections[$model_name]) ? $sections[$model_name] : 'Hệ thống';
        
        switch ($action_name) {
            case 'store':
                $action = 'tạo';
                break;
            case 'update':
                $action = 'cập nhật';
                break;
            case 'delete':
                $action = 'xóa';
                break;
            default:
                $action = 'xử lý';
                break;
        }

        return $user_name . ' đã '. $action.' '.$section.' (Mã: #'.$id.')';
    }
}
