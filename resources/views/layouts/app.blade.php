<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EgoChallenge - @yield('title')</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('components.header')

  <main class="container-main-content">
    @yield('content')
  </main>

  @include('components.footer')

</body>
</html>