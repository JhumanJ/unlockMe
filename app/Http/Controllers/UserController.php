<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Twilio;
use App\SMSVerification;

class UserController extends Controller
{

    public function verify(Request $request){
        $user = $request->user();
        $code_entity = SMSVerification::where('user_id', '=', $user->id)->first();
        $code = "";

        if ($code_entity === null) {
            $code = SMSVerification::createCode();
            $code_entity = SMSVerification::saveCode($user,$code);

            $msg = 'Hello '.$user->first_name.'! Thank you for creating a UnlockMe Account! Your code is: '.$code.'. Enjoy!';
            Twilio::sendSms($user->phone_number,$msg);
        }else {
            $code = $code_entity->code;
        }

        return view('verify.verify', ['user' => $user,'code'=>$code]);

    }

    public function resendSMS(Request $request){
        $user = $request->user();
        $code_entity = SMSVerification::where('user_id', '=', $user->id)->first();
        $msg = "Hello ".$user->first_name."! Thank you for creating a UnlockMe Account! Your code is: ".$code_entity->code.". Enjoy!";
        Twilio::sendSms($user->phone_number,$msg);

        return redirect('/verify')->with('status', 'We sent you another SMS!');
    }

    public function confirmSMS(Request $request){
        $this->validate($request, [
            'code'         => 'required|integer|max:999999',
        ]);

        $user = $request->user();
        $code = SMSVerification::where('user_id', '=', $user->id)->first();
        if ($code->code == $request->code){
            $code->code = 0;
            $code->save();
            $user->status = 1;
            $user->save();
            return redirect('/')->with('status', 'Your phone number is valid!');
        } else{
            return redirect('/verify')->with('error', 'Woops! That\'s not the right code...');
        }

    }



}
