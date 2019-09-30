@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')
<main>
    <div class="container-fluid">
        <div class="row">
            @foreach ($families as $family)
            <div class="col-12 col-lg-4 border-primary vh-100" style="background-image: url('{{$family->image}}')">
                <div class="carousel-caption letrablanca">
                    <h2>CROLL</h2>
                    <p>Apliques | IP20 | Orientables | CRI90 </p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</main>








@endsection ('content')
