@extends('layouts.front.websitestructure')
@section ('title', 'Registro')
@section('content')
<main>
    <div class="containeringreso d-flex align-items-center bg-black">
        <form method="POST" action="{{ route('register') }}"class="container formssmall">
            <div class="letrablanca"> <h2> {{ __('Registro') }} </h2></div>
                        @csrf

                    <div class="form-row">
                            <div class="form-control form-control-light threed threed-blanco  my-2">
                                <i class="fas fa-user icon" style="color: white"></i>
                                <input  placeholder="Nombre" id="name" type="text" class="letrablanca @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                                @error('name')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                        <div class="form-row">


                            <div class="form-control form-control-light threed threed-blanco my-2">
                                <i class="fas fa-user icon"  style="color: white"></i>
                                <input placeholder="Apellido" id="lastname" type="text" class="letrablanca @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            </div>
                                @error('lastname')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="form-row">

                                <div class="form-control form-control-light threed threed-blanco  my-2">
                                    <i class="fas fa-envelope icon"  style="color: white"></i>
                                <input placeholder="Email"  id="email" type="email" class="letrablanca @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                </div>

                                @error('email')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-row">

                                <div class="form-control  form-control-light threed threed-blanco my-2">
                                    <i class="fas fa-key icon"  style="color: white"></i>
                                <input placeholder="Contraseña" id="password" type="password" class="letrablanca @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                </div>

                                @error('password')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-row">

                                <div class="form-control form-control-light threed threed-blanco  my-2">
                                    <i class="fas fa-key icon"  style="color: white"></i>
                                <input placeholder="Repetir contraseña" id="password-confirm" type="password" class="letrablanca" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                            <div class="form-row d-flex justify-content-center my-2">
                                <button type="submit" class="btn btn-fnegro flex-grow-1">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>

                    </form>
                </div>

</main>
@endsection
