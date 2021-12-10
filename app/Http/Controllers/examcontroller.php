<?php

namespace App\Http\Controllers;

use App\Models\admission;
use App\Models\exam;
use App\Models\user;
use App\Models\result;
use App\Models\addquestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
class examcontroller extends Controller
{


    public function showexam()
    {
        $exam = exam::all();

        // dd($exam->class);
        // $filter=admission::where('class','=',$exam->class)->where('board','=',$exam->board)->where('course','=',$exam->course)->first();
        // dd($filter);
        return view('admin/exam', compact('exam'));
    }
    public function storeexam(Request $request)
    {

       

        $input = $request->all();
        exam::create($input);

        return redirect()->route('exam')
            ->with('success', 'data registered successfully.');
    }
    
      public function exammail($id)
    {
        
        $student = exam::find($id);
      
        
        $result = admission::query();
        if (!empty($student->class)) {
            $result = $result->where('class', $student->class);
        }
        if (!empty($student->board)) {
            $result = $result->where('board', $student->board);
        }
        if (!empty($student->course)) {
            $result = $result->where('course', $student->course);
        }
         $result = $result->where('selected',0);
       $result=$result->get();
        
       
        $data = ['notice' => $student->notice];
        
         
        foreach($result as $result){
            Mail::send('mail', $data, function ($message) use ($result) {
                $message->to($result->email);
               
                $message->subject("Importent notice from STUDY POINT LIVE");
            });
        }

      return redirect()->route('exam')
            ->with('success', 'mail sended to everyone successfully.');
    }


    public function examstudent($id)
    {
        $student = exam::find($id);

        $result = admission::query();
        if (!empty($student->class)) {
            $result = $result->where('class', $student->class);
        }
        if (!empty($student->board)) {
            $result = $result->where('board', $student->board);
        }
        if (!empty($student->course)) {
            $result = $result->where('course', $student->course);
        }
         $result = $result->where('selected', 0);
       $result=$result->get();

     

       return view('admin/examers',compact('result'));
    }

    public function examdelete($id){
        $user = exam::find($id);
         $result = admission::query();
        if (!empty($user->class)) {
            $result = $result->where('class', $user->class);
        }
        if (!empty($user->board)) {
            $result = $result->where('board', $user->board);
        }
        if (!empty($user->course)) {
            $result = $result->where('course', $user->course);
        }
       $result=$result->get();

      foreach($result as $result){
         $result->exam=0;
         $result->save();
      }
      admission::query()->update(['selected' => 0]);
     

        $user->delete();


        return redirect()->route('exam')->with('success', 'exam event deleted successfully.');
    }

    public function exam_event_start($id){
        $user = exam::find($id);
        $user->exam=$user->id;
        $user->save();

       

        $result = admission::query();
         $result = $result->where('selected', 0);
        if (!empty($user->class)) {
            $result = $result->where('class', $user->class);
        }
        if (!empty($user->board)) {
            $result = $result->where('board', $user->board);
        }
        if (!empty($user->course)) {
            $result = $result->where('course', $user->course);
        }
        
       $result=$result->get();

      foreach($result as $result){
         $result->exam=$user->id;
         $result->save();
      }

     
      

        return redirect()->route('exam')->with('success', 'exam event started.');
    }
    public function exam_event_stop($id){
        $user = exam::find($id);
        $user->exam=0;
        $user->save();

        
        $result = admission::query();
        if (!empty($user->class)) {
            $result = $result->where('class', $user->class);
        }
        if (!empty($user->board)) {
            $result = $result->where('board', $user->board);
        }
        if (!empty($user->course)) {
            $result = $result->where('course', $user->course);
        }
       
       $result=$result->get();

      foreach($result as $result){
         $result->exam=0;
         $result->save();
      }
        return redirect()->route('exam')->with('success', 'exam event stopped.');
    }
    
    public function student_result(){
       
        $result = DB::table('admissions')->join('result','admissions.id','=','result.user_id')->select('admissions.studentname as name','admissions.image as image','result.total_marks as totalmarks','result.marks as marks','result.cut_marks as cutmarks','result.final_marks as finalmarks','result.time as time','result.id as id')->get();
        
        
      return view('admin.student_result',compact('result'));

        
    }
    
      public function selecter($id){
        $user = admission::find($id);
        $user->selected=1;
        $user->save();
        return redirect()->back()->with('success', 'student removed successfully.');
      }
      
       public function student_answer($id){
        $exam = result::find($id);
        
        $result_array=$exam->answers;
        $answer_details = json_decode($result_array,true);
        $array_id = array_keys($answer_details);
       
        $result = addquestion::whereIn('question_no', $array_id)->get();
        return view('admin.student_answer',compact('result','answer_details'));
      }
    
      public function delete_result($id){
          
          $user=result::find($id);
          $user->delete();
           return redirect()->route('student.result')->with('success', 'user deleted successfully.');
      }

   
}
