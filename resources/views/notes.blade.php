<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container py-5">
        <div class="row">
            <div class="col">
                <header class="text-center p-5">
                    <h1 class="display-4">Notes</h1>
                </header>
                <search class="row mb-3">
                    <form class="form">
                        <input type="search" class="form-control" name="search" placeholder="Search...">
                    </form>
                </search>
        
                @if (count($notes)) 
                <ul class="list-group">
                    @foreach ($notes as $note)
                        <li class="list-group-item">
                            <a href="note/{{ $note['id'] }}" class="text-body text-decoration-none">
                                {{ $note['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                @else
                <p>No notes found</p>
                @endif
            </div>
        </div>
    </main>
</body>
</html>
