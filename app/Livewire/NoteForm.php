<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteForm extends Component
{
    public $id;
    public $title;
    public $text;

    public function save () {
        $note = !empty($this->id) ? Note::find($this->id) : new Note();
        $note->title = $this->title;
        $note->text = $this->text;
        $note->save();

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.note-form');
    }
}
