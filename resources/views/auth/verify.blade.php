@extends('layouts.front.websitestructure')
@section ('title', 'Verificacion')
@section('content')
    <main>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu Email!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nuevo Link de verificacion se envio a tu Mail!') }}
                        </div>
                    @endif

                    {{ __('Por favor verifica tu Email el link enviado!') }}
                    {{ __('No te LLego el Email?') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Haz click aqui para pedir otra!') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection
