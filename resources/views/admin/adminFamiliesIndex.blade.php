@extends ('layouts.front.adminwebsitestructure')

@section ('title', 'Admin')

@section ('content')

    <div class="col-12 col-md-9 col-xl-10 pt-5 d-flex justify-content-center">
        <div class="containeradmin mt-3">
            <div class="row justify-content-between">
                <h4 class="p-4"> / ARMÁ TU LUMINARIA </h4>
                <button type="button" name="button" class="btn btn-famarilloblanco" onclick="window.location.href='/admin/familias/add'"> Nueva familia</button>
            </div>

        <div class="table-responsive">
                <table class="table table-bordred table-striped table-fixed">
                    <thead>
                        <th>ID</th>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Codigo</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Detalle</th>
                    </thead>
                    <tbody>
                    @foreach ($families as $family)
                    <tr class="text-capitalize">
                        <td>{{$family->id}}</td>
                        <td><img src="../{{$family->image}}" alt="Imagen faltante" class="imgadmin"></td>
                        <td>{{$family->name}}</td>
                        <td>{{$family->code}}</td>
                        <td>{{$family->category}}</td>
                        <td> <p>{{$family->description}}</p></td>
                        <td> <a href="/admin/familias/{{{$family->id}}}" class="font-weight-bold"> VER </a>
</td>
                    </tr>

                    @endforeach


                    </tbody>

                </table>


            </div>
   </div>


            </div>
            </div>




@endsection ('content')
