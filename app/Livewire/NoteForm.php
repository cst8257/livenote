<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NoteForm extends Component
{
    public $id;
    public $title;
    public $text;

    public function save () {
        $this->validate([
            'title' => 'required|min:2',
            'text' => 'required'
        ]);
        
        $note = !empty($this->id) ? Note::find($this->id) : new Note();
        $note->title = $this->title;
        $note->text = $this->text;
        $note->user_id = Auth::id();
        $note->save();

        $this->dispatch('saved');
    }

    public function render()
    {
        return view('livewire.note-form');
    }
}
