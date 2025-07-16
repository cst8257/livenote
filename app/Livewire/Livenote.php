<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class Livenote extends Component
{
    public $notes;
    public $search = '';
    public $id = '';
    public $title = 'Title';
    public $text = 'This is text';
    public $showNote = false;

    public function mount() {
        $this->refresh();
    }

    public function refresh () {
        $this->notes = Note::all();
        $this->showNote = false;
    }

    public function create() {
        $this->id = '';
        $this->title = '';
        $this->text = '';
        $this->showNote = true;
    }

    public function updatedSearch () {
        $this->notes = Note::where('title', 'like', "%{$this->search}%")
            ->orWhere('text', 'like', "%{$this->search}%")
            ->get();
    }

    public function show ($id) {
        $note = Note::find($id);
        $this->id = $note->id;
        $this->title = $note->title;
        $this->text = $note->text;
        $this->showNote = true;
    }

    public function save () {
        $this->showNote = false;
    }

    public function render() {
        return view('livewire.livenote');
    }
}
