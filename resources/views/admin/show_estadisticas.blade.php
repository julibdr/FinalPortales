<header id="header">
    @include('header')
</header>


<div class="card mt-4 mb-4 m-3 p-3 mx-auto" style="width: 25rem;">
    @foreach($estadisticasPorDia as $estadistica)
        <p>Fecha: {{ $estadistica->fecha_registro }}, Usuarios Registrados: {{ $estadistica->total_usuarios }}</p>
    
        @if($estadistica->cursosContratados)
            <ul>
                @foreach($estadistica->cursosContratados as $curso)
                    <li>Curso Contratado - {{ $curso->title }}</li>
                    <li>Contenido: {{ $curso->content }}</li>
                    <li>Precio: {{ $curso->price }}</li>
                @endforeach
            </ul>
        @else
            <p>No hay cursos contratados en esta fecha.</p>
        @endif
    @endforeach
</div>




<footer id="footer" class="footer">
    @include('footer')
</footer>
