<header id="header">
    @include('header')
</header>


<div class="card mt-4 mb-4 m-3 p-3 mx-auto" style="width: 25rem;">
    @foreach($estadisticasPorDia as $estadistica)
        <p>Fecha: {{ $estadistica->fecha_registro }}, Usuarios Registrados: {{ $estadistica->total_usuarios }}</p>
      
       
    @endforeach
</div>


<div class="card mt-4 mb-4 m-3 p-3 mx-auto" style="width: 25rem;">
    @foreach($contrataciones as $contratacion)
        <p>User: {{ $contratacion->user->email }},</p>
      
       
    @endforeach
</div>

<footer id="footer" class="footer">
    @include('footer')
</footer>
