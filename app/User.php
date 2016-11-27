<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Search;
use App\Match;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','birth_date','sexual_orientation','phone_number','gender','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isVerified(){
        return ($this->status>0);
    }

    public function oppositeSex(){
        if ($this->gender==1) return 0;
        if ($this->gender==0) return 1;
    }

    public function slotFree($slot){
        //if search exists return "search
        //if match exists return user
        //if not return true

        $user = $this;
        $search = Search::where('user_id', $user->id)->where('slot',$slot)->first();
        $match = Match::where('user_id_1',$user->id)->where('slot_1',$slot)->first();
        if($match===null){
            $match = Match::where('user_id_2',$user->id)->where('slot_2',$slot)->first();
        }

        if ($match!=null){
            if ($match->user_id_1 == $user->id){
                $user_target = User::find($match->user_id_2);
            }
            if ($match->user_id_2 == $user->id){
                $user_target = User::find($match->user_id_1);
            }
            return $user_target;
        }
        if ($search!=null){
            return 'search';
        }

        return true;
    }

    public function alreadyMathWith(){
        $match = Match::where('user_id_1',$this->id)->get();
        $match2 = Match::where('user_id_2',$this->id)->get();

        $matchWith = [];
        foreach($match as $mat) {
            array_push($matchWith,$mat->user_id_2);
        }
        foreach($match2 as $mat) {
            array_push($matchWith,$mat->user_id_1);
        }

        return $matchWith;

    }
}
