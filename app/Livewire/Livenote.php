<?php

namespace App\Livewire;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Livenote extends Component
{
    public $notes;
    public $search = '';
    public $id = '';
    public $title = 'Title';
    public $text = 'This is text';
    public $tags = [];
    public $showNote = false;

    public function mount() {
        $this->refresh();
    }

    #[Computed]
    public function noteFormId () {
        return $this->title ? "{$this->id}:{$this->title}" : "new-note";
    }

    public function refresh () {
        $this->notes = Auth::user()->notes->map(function ($note) {
            $note['tags'] = $note->tags->pluck('name');
            return $note;
        });

        $this->showNote = false;
    }

    public function create() {
        $this->id = '';
        $this->title = '';
        $this->text = '';
        $this->tags = [];
        $this->showNote = true;
    }

    public function updatedSearch () {
        $this->notes = Auth::user()
            ->notes->filter(function ($note) {
                return stripos($note->title, $this->search) !== false || 
                stripos($note->text, $this->search) !== false;
            })
            ->map(function ($note) {
                $note['tags'] = $note->tags->pluck('name');
                return $note;
            });
    }

    #[On('show')]
    public function show ($id) {
        $note = Note::find($id);
        $this->id = $note->id;
        $this->title = $note->title;
        $this->text = $note->text;
        $this->tags = $note->tags->pluck('id');
        $this->showNote = true;
    }
    
    public function render() {
        return view('livewire.livenote');
    }
}
