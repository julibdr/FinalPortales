<header id="header">
    @include('header')
</header>

<div class="card mt-4 mb-4 m-5" style="width: 22rem;">
@if($user )
    <div class="card-body">
      <h5 class="card-title">Estadísticas</h5>
      <p class="card-text">{{ $user->first_name}}</p>
      <p class="card-text">{{ $user->last_name}}</p>
      <h5 class="card-title">{{ $curso->title }}</h5>
      <p class="card-text">{{ $curso->content}}</p>
      <p class="card-text">{{ $curso->price}}</p>
    </div>
  @else
    <p>No está disponible el perfil.</p>
  @endif
</div>

<footer id="footer" class="footer">
    @include('footer')
</footer>
