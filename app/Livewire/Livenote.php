<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Livenote extends Component
{
    public $notes;
    public $search = '';
    public $title = 'Title';
    public $text = 'This is text';

    public function mount() {
        $this->notes = Note::all();
    }

    public function updated($prop) {
        if ($prop === 'search') {
            $this->notes = Note::where('title', 'like', "%{$this->search}%")
                ->orWhere('text', 'like', "%{$this->search}%")
                ->get();
        }
    }

    public function selectNote($id) {
        $note = Note::find($id);
        $this->title = $note['title'];
        $this->text = $note['text'];
    }

    public function render()
    {
        return view('livewire.livenote');
    }
}
