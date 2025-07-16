<li class="list-group-item d-flex justify-content-between align-items-center" wire:click.self="$dispatch('show', {id: {{ $note->id }}})" style="cursor:pointer">
    {{ $note->title }}
    <button class="btn btn-light" 
        wire:click="destroy"
        wire:confirm="Are you sure you want to delete this note?">
        &times;
    </button>
</li>
