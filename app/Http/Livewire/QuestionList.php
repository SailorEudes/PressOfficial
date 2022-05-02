<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Question;

class QuestionList extends Component
{

    protected $showquestions = ['question', 'response'];   

    public function render()
    {
        return view('livewire.question-list', [
            'showquestions' => Question::all(),
        ]);
    }
}
