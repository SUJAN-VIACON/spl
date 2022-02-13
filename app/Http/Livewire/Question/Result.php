<?php

namespace App\Http\Livewire\Question;

use Livewire\Component;

class Result extends Component
{
    public $result;
    public $totalNumber;
    public $sutudentNumber;

    public function mount($result)
    {
        $this->result = $result;
    }

    public function countStudentNumber()
    {
    }

    public function render()
    {
        return view('livewire.question.result');
    }
}
