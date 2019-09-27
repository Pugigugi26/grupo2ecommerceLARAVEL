@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')




    <h1 class="card-title"> {{$family->name}}</h1>
<form class="" action="" method="post">


@foreach ($family->frames as $frame)
<label for="">
    <input type="radio" name="frame_id" value="{{$frame->name}}">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> {{$frame->name}}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
</label>


@endforeach

</form>
@endsection ('content')
