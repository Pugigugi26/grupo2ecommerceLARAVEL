@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')
<main>
    <div class="container-fluid">
        <div class="row">
            @foreach ($families as $family)
            <div class="col-12 col-lg-4 border-primary vh-100 d-flex align-items-end family-image" style="background-image: url('{{$family->image}}')">
                <div class="h-25 w-auto bg-black-transp-50 p-4 family-caption">
                    <a href=familias/{{{$family->id}}}> <h2>{{$family->name}}</h2>
                    <p>{{$family->description}}</p></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</main>








@endsection ('content')
