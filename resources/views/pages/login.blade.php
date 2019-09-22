@extends ('layouts.front.websitestructure')

@section ('title', 'Log in')

@section ('content')

<main>
    <div class="containeringreso d-flex align-items-center" style="background-color: #24fcc4">

        <form class="container formssmall" method="post">
            <h2>/ LOG IN</h2>
            <div class="form-row">
                <div class="form-control threed  my-2">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Correo" name="email" >
                </div>
            </div>
                <span class="error">Usuario no encontrado</span>
            <div class="form-row">
                <div class="form-control threed  my-2">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
            </div>
            <span class="error"></span>
            <div class="form-row d-flex justify-content-end mb-1">
                <span>Olvidaste tu contraseña?</span>
            </div>
            <div class="form-row d-flex justify-content-center my-2">
                <button class="btn btn-famarilloblanco flex-grow-1" type="submit" name="submit">Ingresa</button>
            </div>
            <div class="form-row d-flex justify-content-center my-2">
                <label>
                    <input type="checkbox" checked="checked" name="status"> Recuerdame!
                </label>
            </div>
        </form>
    </div>
</main>
@endsection ('content')
