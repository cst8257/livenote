<div class="row py-5 position-relative">
    <div class="col">
        <section class="d-flex mb-3 position-absolute top-0 end-0">
            <button class="btn btn-primary btn-lg rounded-circle" wire:click="create">&plus;</button>
        </section>

        <search class="row mb-3">
            <div class="col">
                <input type="search" class="form-control" name="search" placeholder="Search..."
                    wire:model.live="search">
            </div>
        </search>

        @if (count($notes)) 
        <x-list-group>
            @foreach ($notes as $note)
                <li class="list-group-item d-flex justify-content-between align-items-center" wire:click="show({{ $note->id }})" style="cursor:pointer">
                    {{ $note->title }}
                    <button class="btn btn-light">
                        &times;
                    </button>
                </li>
            @endforeach
        </x-list-group>
        @else
        <p>No notes found</p>
        @endif
    </div>
    <div class="col">
        @if ($showNote) 
        <form class="card my-5" wire:submit="save">
            <div class="card-header">
                <input type="text" class="form-control" wire:model="title" placeholder="Title...">
            </div>
            <div class="card-body">
                <textarea class="form-control mb-3" placeholder="Text..." wire:model="text"></textarea>
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
        @endif
    </div>
</div>