<?php

namespace App\Http\Controllers;

use App\Twilio;
use Illuminate\Http\Request;
use App\Match;
use App\Message;

class MatchController extends Controller
{

    public function addMessage(Request $request){

        $match_id = $request->input("match_id");
        $user_id = $request->input("user_id");
        $message_content = $request->input("message_content");

        $match = Match::find($match_id);
        if ($match->user_id_1==$user_id || $match->user_id_2==$user_id) {

            $message = new Message();
            $message->user_id = $user_id;
            $message->match_id = $match_id;
            $message->content = $message_content;

            $message->save();

            $response = array(
                'match_id' => $match_id,
                'content' => $message_content,
                'user_id' => $user_id,
            );

            return response()->json($response);

        }

    }

    public function remove(Request $request,$slot){
        $user = $request->user();
        $match = Match::where('user_id_1',$user->id)->where('slot_1',$slot)->first();
        if ($match==null){
            $match = Match::where('user_id_2',$user->id)->where('slot_2',$slot)->first();
        }

        Twilio::deleteChannel($match->channel_sid);

        $match->delete();
        return redirect('/')->with('status', 'You successfully made this lock free!');
    }

    public function test(){
        Twilio::deleteChannel('CH5e2c02f965c143d6b9720d011cacdce7');
    }

}
