@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')


@foreach ($families as $family)
<p> {{$family["name"]}} </p>
@endforeach

@endsection ('content')
