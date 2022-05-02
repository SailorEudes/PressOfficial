<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Question;

class QuestionList extends Component
{

    public function render()
    {
        return view('livewire.question-list', [
            'showquestions' => Question::all(),
        ]);
    }
}
