@extends ('layouts.front.websitestructure')

@section ('title', 'Registro')

@section ('content')

<main>
    <div class="containeringreso d-flex align-items-center bg-black">
        <form  actiion={{url('/exitoso_user')}} class="container formssmall" method="post">
            <h2 class="letrablanca">/ REGISTRO</h2>
            <div class="form-row">
                <div class="form-control form-control-light threed threed-blanco  my-2">
                    <i class="fas fa-user icon" style="color: white"></i>
                    <input class="letrablanca" type="text" placeholder="Nombre" name="name" value"{{old('name')}}">
                </div>
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>

            <div class="form-row">
                <div class="form-control form-control-light threed threed-blanco my-2">
                    <i class="fas fa-user icon"  style="color: white"></i>
                    <input class="letrablanca" type="text" placeholder="Apellido" name="lastname" value"{{old('lastname')}}">
                </div>
                <span class="text-danger">{{$errors->first('lastname')}}</span>
            </div>

            <div class="form-row">
                <div class="form-control form-control-light threed threed-blanco  my-2">
                    <i class="fas fa-envelope icon"  style="color: white"></i>
                    <input class="letrablanca" type="text" placeholder="Email" name="email" value"{{old('email')}}">
                </div>
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div>

            <div class="form-row">
                <div class="form-control  form-control-light threed threed-blanco my-2">
                    <i class="fas fa-key icon"  style="color: white"></i>
                    <input class="letrablanca" type="password" placeholder="Contraseña" name="password" value="{{old('password')}}">
                </div>
                <span class="text-danger">{{$errors->first('password')}}</span>
            </div>
            <div class="form-row">
                <div class="form-control form-control-light threed threed-blanco  my-2">
                    <i class="fas fa-key icon"  style="color: white"></i>
                    <input class="letrablanca" type="password" placeholder="Repetir contraseña" name="password_confirmation" value="{{old('password_confirmation')}}">
                </div>
                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
            </div>
            <div class="form-row d-flex justify-content-center my-2">
                <button class="btn btn-fnegro flex-grow-1" type="submit" value="submit">Registrarme</button>
            </div>
            <div class="form-row d-flex justify-content-center mb-1">
                <label class="form-row d-flex justify-content-center my-2 letrablanca ">
                    <span>Ya estas registrado? </span> <a href="Ingreso.php" style="text-decoration: underline">  Log in</a>
                </label>
            </div>
        </form>
    </div>
</main>
@endsection ('content')
