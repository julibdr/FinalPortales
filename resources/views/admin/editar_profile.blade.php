<header id="header">
    @include('header')
</header>


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Edita tu perfil</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/profile/{{ $profile->id}}" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf
    @method('PATCH')

          <div class="form-floating mb-3">
            <input type="text" name="first_name" value="{{ old('nombre', optional($profile)->first_name)}}"  id="first_name" class="form-control" id="floatingPassword">
            <label for="content">Nombre</label>
            <p>{{ $errors->first('first_name')}}</p>
          </div>
          <div class="form-floating mb-3">
          <input type="text" name="last_name" value="{{ old('last_name', optional($profile)->last_name)}}"  id="last_name" class="form-control" id="floatingPassword">
         <label for="content" class="form-label">Apellido</label>
         <p>{{ $errors->first('last_name')}}</p>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="email" value="{{ old('email', optional($user)->email)}}"  id="email" class="form-control" id="floatingPassword">
         <label for="content" class="form-label">Email</label>
         <p>{{ $errors->first('email')}}</p>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="password" value="{{ old('password', optional($user)->password)}}"  id="password" class="form-control" id="floatingPassword">
         <label for="content" class="form-label">Contraseña</label>
         <p>{{ $errors->first('password')}}</p>
        </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>