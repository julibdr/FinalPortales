<header id="header">
    @include('header')
</header>


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Editar el curso</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/buyer/{{ $curso->id }}" class="p-4 p-md-5 border rounded-3 bg-light">
    
    @method('PATCH')
    @csrf
          <div class="form-floating mb-3">
            <input type="text" name="title" value="{{ old('title', optional($curso)->title)}}"  id="title" class="form-control" >
            <label for="title">Titulo</label>
            <p>{{ $errors->first('title')}}</p>
          </div>
          <div class="form-floating mb-3">
    <textarea class="form-control" name="content" id="content" rows="3">{{ old('content', optional($curso)->content) }}</textarea>
    <label for="content" class="form-label">Descripción:</label>
    <p>{{ $errors->first('content') }}</p>
</div>
        <div class="form-floating mb-3">
            <input type="number" name="price" value="{{ old('price', optional($curso)->price)}}"  id="price" class="form-control">
            <label for="price">Precio</label>
            <p>{{ $errors->first('price')}}</p>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>
   


