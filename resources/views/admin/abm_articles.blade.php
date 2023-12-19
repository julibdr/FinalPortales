
<section id="crear_articulos" class="crear_articulos">
  <!-- ======= Footer ======= -->
  @include('admin.crear_articulos')
  <!-- End Footer -->
</section>
<section id="abm_articles" class="abm_articles mb-5">
<div class="container">
    <div class="row">
   
        @foreach($articulos as $articulo)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articulo->title }}</h5>
                        <p class="card-text">{{ $articulo->content}}</p>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit"> <a href="/articles/{{ $articulo->id}}/edit" class="nav-link">Editar</a></button>
                        <form action="/articles/{{$articulo->id}}" method="POST" class="nav-link">
                        @csrf
                        @method('DELETE')
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
 