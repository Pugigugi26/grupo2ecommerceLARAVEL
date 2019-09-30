@extends ('layouts.front.adminwebsitestructure')

@section ('title', 'Admin')

@section ('content')

            <div class="col-12 col-md-9 col-xl-10 pt-5 d-flex justify-content-center">
                <div class="containeradmin mt-3">
                    <div class="row justify-content-between">
                        <h4 class="p-4"> / DETALLE DE LA FAMILIA {{$family->name}}</h4>
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
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                            <tr class="text-capitalize">
                                <td>{{$family->id}}</td>
                                <td><img src="../{{$family->image}}" alt="Imagen faltante" class="imgadmin"></td>
                                <td>{{$family->name}}</td>
                                <td>{{$family->code}}</td>
                                <td>{{$family->category}}</td>
                                <td> <p>{{$family->description}}</p></td>
                                <td>
                                    <form class="" action="/admin/familias/borrar" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$family->id}}">
                                        <input type="submit" name="" value="Borrar Familia" class="btn-danger">
                                    </form>
                                </td>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
           </div>
        </div>
</div>







@endsection ('content')
