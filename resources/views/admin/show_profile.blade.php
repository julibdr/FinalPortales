<header id="header">
    @include('header')
</header>

<div class="card mt-4 mb-4 m-5" style="width: 22rem;">
@if($profile )
    <div class="card-body">
      <h5 class="card-title">Mi perfil</h5>
      <p class="card-text">Nombre: {{ $profile->first_name }}</p>
      <p class="card-text">Apellido: {{ $profile->last_name }}</p>
      <p class="card-text">Email: {{ $user->email }}</p>
      <p class="card-text">Contraseña: {{ $user->password }}</p>

      <button class="btn btn-primary mb-3" type="submit">
        <a href="/profile/{{ $profile->id }}/edit" class="nav-link"><i class="bi bi-pen"></i>  Editar información</a>
      </button>
    </div>
  @else
    <p>No está disponible el perfil.</p>
  @endif
</div>

<footer id="footer" class="footer">
    @include('footer')
</footer>
