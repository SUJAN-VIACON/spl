<?php

namespace App\Http\Controllers;

use App\Models\addquestion;
use App\Models\result;
use App\Models\User;
use App\Models\exam;
use App\Models\admission;
use Illuminate\Http\Request;

class questioncontroller extends Controller
{
    public function show_question()
    {
        
        $userpass = session()->get('password_hash_web');
            $users = user::where('password', '=', $userpass)->first();
             $user = admission::where('email', '=', $users->email)->first();
             $user_no = result::where('user_id', '=', $user->id)->count();
             if($user_no==0){
            
            $user = admission::where('email', '=', $users->email)->first();
            $exam= exam::where('id', '=', $user->exam)->first();
        $id = 1;
        $vquestion = addquestion::where('question_no', '=', $id)->first();
        return (view('home.question', compact('vquestion','exam','user')));
                 
             }else{
                 
        return redirect()->route('home')
            ->with('error', 'you have already attended the exam .');
             }
    }
    public function ajax_show_question(Request $request)
    {

        $id = $request->id;
        $ans = 0;
        $rev = 0;
        $lastid = addquestion::count();
        if (session()->has('store')) {
            $store = session()->get('store');
            if (array_key_exists($id, $store)) {
                $ans = $store[$id];
            }
            if (array_key_exists($id - 1, $store)) {
                $rev = 1;
            }
        }
        if ($lastid == $id - 1) {
            $id = 1;
            if (array_key_exists(1, $store)) {
                $ans = $store[1];
            }
        }
        $vquestion = addquestion::where('question_no', '=', $id)->first();


        return response()->json(['review' => $rev, 'radiono' => $ans, 'result' => $vquestion]);
    }


    public function savequestion(Request $request)
    {

        $id = $request->id;
        $ans = 0;
        $answer = $request->answer;
        $lastid = addquestion::count();

        $store = session()->has('store') ? session()->get('store') : [];
        if (array_key_exists($id, $store)) {
            $ans = $store[$id];
        }
        $store[$id - 1] = $answer;

        session(['store' => $store]);
        if ($lastid == $id - 1) {
            $id = 1;
            if (array_key_exists(1, $store)) {
                $ans = $store[1];
            }
        }
        $vquestion = addquestion::where('question_no', '=', $id)->first();

        return response()->json(['radiono' => $ans, 'result' => $vquestion]);
    }

    public function clearquestion(Request $request)
    {

        $store = session()->get('store');

        if (isset($store[$request->id])) {
            unset($store[$request->id]);
            session()->put('store', $store);
            return 1;
        }
    }


    public function submit()
    {


        if (session()->has('store')) {
             $total=0;
             $cutmarks=0;
             $gtotal=0;
            $a = session()->get('store');
            $array = array_keys($a);
            foreach ($array as $array) {

                $question = addquestion::where('question_no', '=', $array)->first();
                if ($question->answer == $a[$array]) {
                   
                     $total+=$question->marks;

                } else {
                    $cutmarks+=$question->marks*33.3/100;
                }
            }

           $gtotal=$total-$cutmarks;
           
           $userpass = session()->get('password_hash_web');
           $users = User::where('password', '=', $userpass)->first();
            $admission = admission::where('email', '=', $users->email)->first();
         $question=addquestion::all();
         $total_marks=0;
         foreach($question as $question){
             $total_marks+=$question->marks;
         }
           
            $result = new result();
            $result->user_id=$admission->id;
             $result->exam_id=$admission->exam;
            $result->answers= json_encode($a);
             $result->total_marks=$total_marks;
            $result->marks=$total;
             $result->cut_marks=$cutmarks;
              $result->final_marks=$gtotal;
            $result->save();
            return redirect()->route('result');
        }
    }
    
     public function result(){
        $userpass = session()->get('password_hash_web');
           $users = User::where('password', '=', $userpass)->first();
            $admission = admission::where('email', '=', $users->email)->first();
            $result = result::where('user_id', '=', $admission->id)->first();
             $exam = exam::where('id', '=', $result->exam_id)->first();
             
            

        return view('home.result',compact('users','result','exam'));
    }
}
