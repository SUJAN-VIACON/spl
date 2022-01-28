<?php

namespace App\Http\Livewire\Question;

use App\Models\addquestion;
use Livewire\Component;

class ShowQuestions extends Component
{
    public $questions;
    public $questionNo = 1;
    public $onQuestion;

    public function mount()
    {
        $this->questions = addquestion::all();
        $this->findQuestion($this->questionNo);
    }

    public function findQuestion($questionNo)
    {
        
      $question =  addquestion::query()
            ->where('question_no', $questionNo)
            ->first();
            $this->onQuestion = $question;
    }

    public function render()
    {
        return view('livewire.question.show-questions');
    }
}
