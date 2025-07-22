<main class="container py-5">
    <header class="text-center p-5">
        <h1 class="display-4">Login</h1>
    </header>
    <div class="row">
        <div class="col col-md-6 offset-md-3 col-xl-4 offset-xl-4">
            <form class="bg-light p-5 border border-1 mb-3">
                <div class="form-group mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="email">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model="password">
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</main>