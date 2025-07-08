<div class="row">
    <div class="col">
        <search class="row mb-3">
            <form class="form" wire:submit.prevent="">
                <input type="search" class="form-control" name="search" placeholder="Search..."
                    wire:model.live="search">
            </form>
        </search>

        @if (count($notes)) 
        <x-list-group>
            @foreach ($notes as $note)
                <li class="list-group-item" wire:click="selectNote({{ $note['id'] }})" style="cursor:pointer">
                    {{ $note['title'] }}
                </li>
            @endforeach
        </x-list-group>
        @else
        <p>No notes found</p>
        @endif
    </div>
    <div class="col">
        <x-card :title="$title">{{ $text }}</x-card>
    </div>
</div>