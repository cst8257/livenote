<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ListItem extends Component
{
    public $note;

    public function destroy () {
        $note = Note::find($this->note->id);
        $note->delete();
        $this->dispatch('deleted');
    }

    public function render()
    {
        return view('livewire.list-item');
    }
}
