<form class="card my-5" wire:submit="save">
    <div class="card-header">
        <input type="text" class="form-control" wire:model="title" placeholder="Title...">
        @error('title')<p class="text-danger">{{ $message }}</p>@enderror
    </div>
    <div class="card-body">
        <div class="form-group mb-3">
            <textarea class="form-control mb-3" placeholder="Text..." wire:model="text"></textarea>
            @error('text')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        <div class="form-group mb-3">
            <div class="form-check">
              <input 
                class="form-check-input" 
                type="checkbox" 
                value="" 
                id="checkbox"
                wire:model="tags">
              <label class="form-check-label" for="checkbox">
                Label
              </label>
            </div>
        </div>
        <button class="btn btn-primary">Save</button>
    </div>
</form>
