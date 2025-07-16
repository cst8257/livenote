<form class="card my-5" wire:submit="save">
    <div class="card-header">
        <input type="text" class="form-control" wire:model="title" placeholder="Title...">
    </div>
    <div class="card-body">
        <textarea class="form-control mb-3" placeholder="Text..." wire:model="text"></textarea>
        <button class="btn btn-primary">Save</button>
    </div>
</form>
