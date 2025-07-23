<li class="list-group-item d-flex align-items-center" wire:click.self="$dispatch('show', {id: {{ $note->id }}})" style="cursor:pointer">
    {{ $note->title }}

    <span class="badge text-bg-primary mx-1">Tag</span>

    <button class="btn btn-light ms-auto" 
        wire:click="destroy"
        wire:confirm="Are you sure you want to delete this note?">
        &times;
    </button>
</li>
