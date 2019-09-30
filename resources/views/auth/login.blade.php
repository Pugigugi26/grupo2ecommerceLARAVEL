@extends('layouts.front.websitestructure')

@section ('title', 'Log in')

@section('content')

<main>
    <div class="containeringreso d-flex align-items-center" style="background-color: #24fcc4">
        <form method="POST" action="{{ route('login') }}" class="container formssmall">
            @csrf
            <h2>/ LOG IN</h2>
            <div class="form-row">
                <div class="form-control threed  my-2">
                    <i class="fas fa-envelope icon"></i>
                    <input id="email" type="email" placeholder="Correo" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                </div>
                @error('email')
                <span class="error" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-control threed  my-2">
                    <i class="fas fa-key icon"></i>
                    <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                </div>
                @error('password')
                <span class="error" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

          <div class="form-group row">
              <div class="col-md-6 offset-md-4">
                  <div class=class="form-row d-flex justify-content-center my-2">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <label class="form-check-label" for="remember">
                          {{ __('Recuerdame') }}
                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="form-row d-flex justify-content-center my-2">
                  <button type="submit"  class="btn btn-famarilloblanco flex-grow-1">
                      {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Olvidaste tu contraseña?') }}
                      </a>
                  @endif
              </div>
          </div>

        </form>
    </div>
</main>
@endsection
