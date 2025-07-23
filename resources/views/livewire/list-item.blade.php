<li class="list-group-item d-flex align-items-center" wire:click.self="$dispatch('show', {id: {{ $note->id }}})" style="cursor:pointer">
    {{ $note->title }}

    @foreach ($note->tags->toArray() as $tag)
    <span class="badge text-bg-primary mx-1">{{ is_array($tag) ? $tag['name'] : $tag }}</span>
    @endforeach

    <button class="btn btn-light ms-auto" 
        wire:click="destroy"
        wire:confirm="Are you sure you want to delete this note?">
        &times;
    </button>
</li>
