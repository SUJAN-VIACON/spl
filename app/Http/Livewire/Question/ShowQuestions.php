<?php

namespace App\Http\Livewire\Question;

use App\Models\addquestion;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ShowQuestions extends Component
{
    use LivewireAlert;

    public $question;
    public $questionNo = 1;
    public $onQuestion;
    public $noOfQuestions;
    public $answer;
    public $markedAnswers = [];

    public function mount()
    {
        $this->questions = addquestion::all();
        $this->noOfQuestions = $this->questions->count();
        $this->findQuestion($this->questionNo);
        $this->alert('success', 'Basic Alert');
    }

    public function saveAndNext()
    {
        if(!$this->answer){
            $this->alert('warning', 'Please select a option before going to save');
            return;
        }
        $this->fillMarkedData('success');
        $this->findQuestion($this->questionNo + 1);

           }

    public function clear()
    { 
        if(!isset($this->markedAnswers[$this->questionNo]['answer'])){
            $this->alert('info', 'Nothing is selected to clear');
        }
        unset($this->markedAnswers[$this->questionNo]);
        $this->checkState();
    }

    public function saveAndMarkForNext()
    {
        if(!$this->answer){
            $this->alert('warning', 'Please select a option before going to save');
            return;
        }
        $this->fillMarkedData('warning');
        $this->findQuestion($this->questionNo + 1);
    }

    public function markForReviewAndNext()
    {
        $this->fillMarkedData('primary');
        $this->findQuestion($this->questionNo + 1);
    }

    public function fillMarkedData($color)
    {
        $this->markedAnswers[$this->questionNo] = [
            'color' => $color,
            'answer' => $this->answer
        ];
        $this->reset('answer');
    }

    public function findQuestion($questionNo)
    {
        if (
            $questionNo > $this->noOfQuestions
            || $questionNo < 1
        ) $questionNo = 1;

        $question =  addquestion::query()
            ->where('question_no', $questionNo)
            ->first();
        $this->onQuestion = $question;
        $this->questionNo = $questionNo;
        $this->checkState();
    }

    public function forcedToSelect(){
        if(!isset($this->markedAnswers[$this->questionNo]['answer'])){
            $this->alert('warning', 'The world has warned you.');
        }
    }

    public function checkState(){
        if(isset($this->markedAnswers[$this->questionNo]['answer'])){
            $this->answer = $this->markedAnswers[$this->questionNo]['answer'];
        }else{
            $this->answer = false;
        }
    }

    public function submit(){
        dd($this->markedAnswers);
    }

    public function render()
    {
        return view('livewire.question.show-questions');
    }
}
