<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use Illuminate\Support\Facades\DB;
use App\Match;
use App\Twilio;


class SearchController extends Controller
{

    public function search(Request $request,$slot){


        $user = $request->user();
        if ($user->slotFree($slot)!=true){
            return redirect('/')->with('error', 'It seems that there is already someone in this slot, or that we are already looking for someone...');
        }

        if($user->sexual_orientation==2){
            //Bi

            $search = Search::where('user_sexual_orientation', 2)
                ->where('user_sexual_orientation', $user->gender)
                ->where('user_id','<>',$user->id)
                ->first();

        } elseif ($user->sexual_orientation==1){
            //Hetero

            $search = Search::where('user_gender', $user->oppositeSex())
                ->whereIn('user_sexual_orientation', [1,2])
                ->where('user_id','<>',$user->id)
                ->first();

        } else {
            //Gay
            $search = Search::where('user_gender', $user->gender)
                ->whereIn('user_sexual_orientation', [0,2])
                ->where('user_id','<>',$user->id)
                ->first();
        }

        if ($search===null){

            $search = new Search();
            $search->user_id = $user->id;
            $search->slot = $slot;
            $search->user_gender = $user->gender;
            $search->user_sexual_orientation = $user->sexual_orientation;
            $search->save();

            return redirect('/')->with('status', 'We\'ll let you know when we will have find someone matching with you criterias!');

        } else {

            //its a match
            $match = new Match();
            $match->user_id_1 = $search->user_id;
            $match->slot_1 = $search->slot;
            $match->user_id_2 = $user->id;
            $match->slot_2 = $slot;
            $match->save();
            $match->channel_sid = Twilio::createChannel($match);
            $match->save();


            $search->delete();

            //create tchat room

            return redirect('/')->with('status', 'Congratulations! You have a new match!');

        }
    }

    public function test(){
        Twilio::deleteChannel('CH634695212945461abd3652a6c7337d94');
    }




}
