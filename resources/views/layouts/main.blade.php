<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students app</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark mb-5">
            <div class="container-fluid bg-dark">
                <div class="navbar-brand text-light fs-2">Control App</div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="{{route('students.index')}}">Main</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-light fs-4" href="{{route('students.create')}}">Create</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>