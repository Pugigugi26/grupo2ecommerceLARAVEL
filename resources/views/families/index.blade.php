@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')
<main>
    <div class="container-fluid">
        <div class="row">
            @foreach ($families as $family)
            <div class="col-4 border-primary vh-100" style="background-image: url('{{$family->image}}')">

            </div>
            @endforeach
        </div>

    </div>
</main>








@endsection ('content')
