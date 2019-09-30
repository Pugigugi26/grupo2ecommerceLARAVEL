@extends ('layouts.front.adminwebsitestructure')

@section ('title', 'Admin')

@section ('content')

    <div class="col-12 col-md-9 col-xl-10 pt-5 d-flex justify-content-center">
        <div class="containeradmin mt-3">
                <form class="contenedor_ap" method="post" action"/admin/familias/add">
                    @csrf
                  <h4 class="p-4"> / NUEVA FAMILIA </h4>
                  <div class="form-row mb-3">
                    <div class="form-control threed">
                      <i class="fas fa-align-left icon"></i>
                      <input type="text" placeholder="Nombre" name="name" value="">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="form-control threed">
                      <i class="fas fa-align-left icon"></i>
                      <input type="text" placeholder="Categoria" name="category" value="">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="form-control threed">
                      <i class="fas fa-align-left icon"></i>
                      <input type="text" placeholder="Codigo (3 letras)" name="code" value="">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="form-control threed">
                      <i class="fas fa-align-left icon"></i>
                      <input type="text" placeholder="Descripcion" name="description" value="">
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="form-control threed">
                      <i class="fas fa-image icon"></i>
                      <input type="file" placeholder="Imagen" name="image" value="">
                    </div>
                      <span class="error" style="color: white;"></span> <br>
                  </div>

                  <div class="row justify-content-around">
                    <button class="btn btn-famarilloblanco" type="submit">GUARDAR</button>
                     <a href="aperturasListar.php" class="btn btn-famarilloblanco">VOLVER</a>
                  </div>

                </form>


            </div>
   </div>








@endsection ('content')
