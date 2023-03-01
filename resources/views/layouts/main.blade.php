<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
    <title>Stories</title>
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{ route('index') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Stories</span>
        </a>

        <ul class="nav nav-pills">
          <li class="nav-item"><a href="{{ route('index') }}" class="nav-link active" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="{{ route('create') }}" class="nav-link">Add</a></li>
        </ul>
      </header>
      <div class="container-fluid p-5">
@yield('content')
</div>
</body>
</html>
