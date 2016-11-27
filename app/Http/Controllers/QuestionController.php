<?php

namespace App\Http\Controllers;

use App\Match;
use App\Unlocked;
use Illuminate\Http\Request;
use App\Question;
use App\Answers;

class QuestionController extends Controller
{

    public function index(){
        return view('questions.home');
    }

    public function save(Request $request){
        $this->validate($request, [
            'answer1'     => 'required',
            'answer2'     => 'required',
            'answer3'     => 'required',
            'answer4'     => 'required',
            'answer5'     => 'required',
            'answer6'     => 'required',
            'answer7'     => 'required',
            'answer8'     => 'required',
            'answer9'     => 'required',
            'answer10'     => 'required',
            'answer11'     => 'required',
            'answer12'     => 'required',
            'answer13'     => 'required',
            'answer14'     => 'required',
            'answer15'     => 'required',
        ]);

        $user=$request->user();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=1;
        $answer->answer = $request->answer1;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=2;
        $answer->answer = $request->answer2;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=3;
        $answer->answer = $request->answer3;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=4;
        $answer->answer = $request->answer4;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=5;
        $answer->answer = $request->answer5;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=6;
        $answer->answer = $request->answer6;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=7;
        $answer->answer = $request->answer7;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=8;
        $answer->answer = $request->answer8;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=9;
        $answer->answer = $request->answer9;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=10;
        $answer->answer = $request->answer10;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=11;
        $answer->answer = $request->answer11;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=12;
        $answer->answer = $request->answer12;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=13;
        $answer->answer = $request->answer13;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=14;
        $answer->answer = $request->answer14;
        $answer->save();

        $answer = new Answers();
        $answer->user_id=$user->id;
        $answer->question_id=15;
        $answer->answer = $request->answer15;
        $answer->save();

        return redirect('/')->with('status', 'Thank you for your answers, enjoy the app!');

    }

    public function unlock(Request $request){
        $match_id = $request->input("match_id");
        $user_id = $request->input("user_id");
        $question_id = $request->input("question_id");

        $match = Match::find($match_id);
        if ($match->user_id_1 == $user_id){
            $status = 1;
        } else {
            $status = 2;
        }

        $unlock = Unlocked::where('match_id',$match_id)->where('question_id',$question_id)->where('status',$status)->first();
        if (!$unlock==null){
            return;
        }

        $unlock = new Unlocked();
        $unlock->match_id=$match_id;
        $unlock->question_id = $question_id;
        $unlock->status = $status;
        $unlock->save();

        return response()->json($unlock);
    }

//    public function getUnlock(Request $request, $id){
//        $question = Question::find($id);
//        return response()->json($question);
//
//    }

    public function getAnswer(Request $request,$match_id,$id){
        $match = Match::find($match_id);
        $user = $request->user();
        if($match->user_id_1 == $user->id){
            $unlock = Unlocked::where('match_id',$match->id)->where('question_id',$id)->where('status',2)->first();
        }else {
            $unlock = Unlocked::where('match_id',$match->id)->where('question_id',$id)->where('status',1)->first();
        }

        if ($unlock!=null){
            if($match->user_id_1 == $user->id) {
                $answer = Answers::where('user_id',$match->user_id_2)->where('question_id',$id)->first();
            }else{
                $answer = Answers::where('user_id',$match->user_id_1)->where('question_id',$id)->first();
            }

            return response()->json($answer);

        } else {

            return;
        }

    }

    public function getMyAnswer(Request $request,$id){
        $user = $request->user();
        $answer = Answers::where('user_id',$user->id)->where('question_id',$id)->first();
        return response()->json($answer);
    }

}
