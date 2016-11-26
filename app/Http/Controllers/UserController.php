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
        $code = SMSVerification::where('user_id', '=', $user->id)->first();
        if ($code === null) {
            $code = SMSVerification::createCode();
            SMSVerification::saveCode($user,$code);

            $msg = "Hello ".$user->first_name."! Thank you for creating a UnlockMe Account! Your code is: "+$code+". Enjoy!";
            Twilio::sendSms($user->phone_number,$msg);
        }

        return view('verify.verify', ['user' => $user,'code'=>$code->code]);

    }

    public function resendSMS(Request $request){
        $user = $request->user();
        $code = SMSVerification::where('user_id', '=', $user->id)->first();
        $msg = "Hello ".$user->first_name."! Thank you for creating a UnlockMe Account! Your code is: "+$code->code+". Enjoy!";
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
            $user->status = 1;
            $user->save();
            return redirect('/');
        } else{
            return redirect('/verify')->with('error', 'Woops! That\'s not the right code...');
        }

    }


}
