<header id="header">
    @include('header')
</header>


<div class="card mt-4 mb-4 m-5" style="width: 22rem;">
    @if($user)
        <div class="card-body">
            <h5 class="card-title">Mi perfil</h5>
            <p class="card-text">Email del usuario: {{ $user->email }}</p>
        </div>

        @if($user->contratacion)
            @foreach ($curso as $cursoItem)
                <div class="card-body">
                    <p class="card-text">Nombre del curso: {{ $cursoItem->title }}</p>
                    <p class="card-text">Contenido del curso: {{ $cursoItem->content }}</p>
                </div>
            @endforeach
        @else
            <p>No hay cursos contratados.</p>
        @endif
    @else
        <p>No está disponible el perfil.</p>
    @endif
</div>

<footer id="footer" class="footer">
    @include('footer')
</footer>
