<!DOCTYPE html>
<html lang="en">
<head>
  <title>Name - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('blues.index')}}">BLUE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('reds.index')}}">RED</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
      </li> -->
    </ul>
  </div>
</nav>

<div class="container-fluid mt-3">
  @yield('content')
</div>

</body>
</html>