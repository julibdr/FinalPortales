<header id="header">
    @include('header')
  </header>

<!-- <section id="shop" class="shop"> -->
<div class="px-4 py-5 my-5 text-center">

    <h1 class="display-5 fw-bold text-body-emphasis">Bienvenido a nuestra Tienda</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">En nuestro espacio dedicado al cuidado y entrenamiento de mascotas, encontrarás una amplia gama de cursos diseñados para fortalecer el vínculo con tu compañero peludo. Desde lecciones fundamentales sobre cuidado básico hasta entrenamientos especializados, estamos comprometidos a brindarte los recursos y conocimientos necesarios para proporcionar a tus mascotas una vida feliz y saludable.</p>
    </div>
    
  </div>

<div class="container">
    <div class="row">
   
        @foreach($cursos as $curso)
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->title }}</h5>
                        <p class="card-text">{{ $curso->content}}</p>
                        <p class="card-text">{{ $curso->price}}</p>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit"> <a href="/buyer/{{ $curso->id}}/show" class="nav-link">Contratar</a></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
<!-- </section> -->
<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>