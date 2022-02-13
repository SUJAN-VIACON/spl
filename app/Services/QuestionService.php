<?php

namespace App\Services;

use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class QuestionService
{
    public function saveResult($ansers)
    {
        $result = [];

        foreach ($ansers as $question => $answer) {

            if ($answer['color'] != 'primary') {
                $result[$question] =  $answer['answer'];
            }
        }

        Result::create([
            'user_id' => Auth::id(),
            'student_answers' => $result,
            'exam_event_id' => 1 
        ]);
        
    }
}
