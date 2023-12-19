<header id="header">
    @include('header')
</header>
<section id="crear_cursos" class="crear_cursos">
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Crear un nuevo curso</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5 mb-5">
        <form method="POST" action="" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf
          <div class="form-floating mb-3">
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" id="floatingPassword">
            <label for="title">Titulo</label>
          </div>
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         

          <div class="form-floating mb-3">
            <textarea id="content" class="form-control @error('content') required is-invalid @enderror" name="content"  rows="7"></textarea>
            <label for="content" class="form-label">Descripción:</label>
          </div>
          @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-floating mb-3">
              <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror">
              <label for="price">Precio:</label>
          </div>
          @error('price')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>
</select>

   
   


