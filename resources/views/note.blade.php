<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <div class="card my-5">
                    <div class="card-header">
                        <h1>{{ $title }}</h1>
                    </div>
                    <div class="card-body">
                        {{ $text }}
                    </div>
                </div>
                <div class="text-center">
                    <a class="btn btn-primary" href="/">Back</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
