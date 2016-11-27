<?php

namespace App\Http\Middleware;

use Closure;
use App\Answers;
use App\Question;
use Illuminate\Support\Facades\Auth;

class AnsweredQuestions
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()|| !$request->user()->isVerified()) {
            return redirect('/');
        }
        $count = Answers::where('user_id',$request->user()->id)->count();
        $numberQuestions = Question::count();

        if ($count<$numberQuestions) {
            return redirect('/questions');
        }

        return $next($request);
    }
}
