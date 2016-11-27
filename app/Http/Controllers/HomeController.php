<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Match;
use App\Search;
use App\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('answered');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $slot1 = "empty";
        $slot2 = "empty";
        $slot3 = "empty";

        $slot1_state = $user->slotFree(1);
        $slot2_state = $user->slotFree(2);
        $slot3_state = $user->slotFree(3);


        if ($slot1_state!==1){
            $slot1 = $slot1_state;
        }
        if ($slot2_state!==1){
            $slot2 = $slot2_state;
        }
        if ($slot3_state!==1){
            $slot3 = $slot3_state;
        }


        return view('home',['slot1' => $slot1,'slot2' => $slot2,'slot3' => $slot3]);
    }

    public function chat(Request $request, $number){

        $match = Match::where('user_id_1',$request->user()->id)->where('slot_1',$number)->first();
        if ($match==null) {
            $match = Match::where('user_id_2',$request->user()->id)->where('slot_2',$number)->first();
        }

        $messages = Message::where('match_id',$match->id)->get();

        return view('chat.home',['match'=>$match,'messages'=>$messages]);
    }
}
