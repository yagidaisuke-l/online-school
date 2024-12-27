<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Default Title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <header>
    <h1>@yield('header', 'Default Header')</h1>
  </header>
  <main>
    @yield('content')
  </main>
  <footer>
    <p>Copyright © 2024 InLife.Work</p>
  </footer>
</body>
</html>
