<section id="header" class="header">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SniffNear</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">SniffNear</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="blog" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="shop" class="nav-link">Tienda</a></li>
        @guest
        <li class="nav-item"><a href="registro_admin" class="nav-link">Ingreso</a></li>
        @endguest
        @auth  
        @if(auth()->user()->role == 'admin')
          <li class="nav-item"><a href="/show_estadisticas" class="nav-link mt-1 fs-5"><i class="bi bi-bar-chart-line"></i></a></li>
          <li class="nav-item"><a href="/buyer" class="nav-link mt-1 fs-5"><i class="bi bi-mortarboard"></i></a></li>
        @endif

        <li class="nav-item"><a href="/articles" class="nav-link mt-1 fs-5"><i class="bi bi-pencil-square"></i></a></li>
        <li class="nav-item"><a href="/show_profile" class="nav-link mt-1 fs-5"><i class="bi bi-person-gear"></i></a></li>
        <li class="nav-item"><a href="/logout" class="nav-link mt-1 fs-5"><i class="bi bi-box-arrow-right"></i></a></li>@endauth
      </ul>
    </header>
  </div>
</select>