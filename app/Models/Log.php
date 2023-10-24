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
}
