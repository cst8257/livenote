<div class="row py-5 position-relative">
    <div class="col">
        <section class="d-flex mb-3 position-absolute top-0 end-0">
            <button class="btn btn-primary btn-lg rounded-circle" wire:click="create">&plus;</button>
        </section>

        <livewire:search wire:model.live="search" />

        @if (count($notes)) 
        <x-list-group>
            @foreach ($notes as $note)
                <livewire:list-item :key="$note->id.'-'.$note->title" :$note @deleted="refresh" />
            @endforeach
        </x-list-group>
        @else
        <p>No notes found</p>
        @endif
    </div>
    <div class="col">
        @if ($showNote) 
        <livewire:note-form :key="$this->noteFormId" :$id :$title :$text @saved="refresh" />
        @endif
    </div>
</div>