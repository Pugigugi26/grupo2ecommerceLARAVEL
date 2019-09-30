@extends('layouts.front.websitestructure')
@section ('title', 'Home')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido </div>

                <div class="card-body">
                    @if (session('status'))
                        <div >
                            {{ session('status') }}
                        </div>
                    @endif
                    Estas Logueado!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
