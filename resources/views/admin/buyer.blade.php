
<section id="crear_cursos" class="crear_cursos">
  @include('admin.crear_cursos')
</section>
<section id="abm_cursos" class="abm_cursos mb-5">
<div class="container">
    <div class="row">
   
        @foreach($cursos as $curso)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->title }}</h5>
                        <p class="card-text">{{ $curso->content}}</p>
                        <p class="card-text">{{ $curso->price}}</p>
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit"> <a href="/buyer/{{ $curso->id}}/edit" class="nav-link">Editar</a></button>
                        <form action="/buyer/{{$curso->id}}" method="POST" class="nav-link">
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
 