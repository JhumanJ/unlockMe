<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SMSVerification extends Model
{

    protected $table = 'sms_verification';

    public static function createCode(){
        return mt_rand(100000, 999999);
    }

    public static function saveCode($user,$sms_code){
        if ($user->isVerified()){
            return false;
        }
        $code = new SMSVerification();
        $code->user_id = $user->id;
        $code->code = $sms_code;
        $code->save();

        return true;
    }


}
