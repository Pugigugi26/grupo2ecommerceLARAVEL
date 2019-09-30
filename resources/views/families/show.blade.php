@extends ('layouts.front.websitestructure')

@section ('title', 'Familias')

@section ('content')





<div class="container-fluid containerproducto">
  <div class="row" id="headercarro" >
    <h4> / ARMÁ TU LUMINARIA {{$family->name}}</h4>
   </div>
    <form>
        <div class="form-item row d-flex justify-content-center">
          <div class="row subtituloproducto">
            <h5 class="subtituloppal"> Nucleo LED </h5>
            <h6> Lorem ipsum lorem ipsum </h6>
        </div>
        <div class="row h-25">
            @foreach ($family->leds as $led)
                    <label class="col-12  col-md-3  col-lg-2 ">
                      <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
                      <div class="card card-body bg-light d-flex align-items-center mh-">
                      <img src="../{{$led->image}}" alt="no estoy" class="w-100">
                      <div class="card-title">
                         {{$led->name}}
                      </div>
                      <div class="card-description overflow-hidden">
                          {{$led->color_t}}
                      </div>
                      </div>
                      </label>
            @endforeach
        </div>
      </div>
      <div class="form-item row d-flex justify-content-center">
        <div class="row subtituloproducto">
          <h5 class="subtituloppal"> Lente y angulo de apertura </h5>
          <h6> Lorem ipsum lorem ipsum </h6>
      </div>
      <div class="row h-25  justify-content-center">
          @foreach ($family->optics as $optic)
                  <label class="col-12  col-md-3  col-lg-2 ">
                    <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
                    <div class="card card-body bg-light d-flex align-items-center mh-">
                    <img src="../{{$optic->image}}" alt="no estoy" class="w-100">
                    <div class="card-title">
                       {{$optic->name}}
                    </div>
                    <div class="card-description overflow-hidden">
                        {{$optic->angle}}
                    </div>
                    </div>
                    </label>
          @endforeach
      </div>
    </div>





      <div class="form-item row d-flex justify-content-center">
        <div class="row subtituloproducto">
          <h5 class="subtituloppal"> Marco </h5>
          <h6> Lorem ipsum lorem ipsum </h6>
      </div>
      <div class="row h-25">
          @foreach ($family->frames as $frame)
                  <label class="col-12  col-md-3  col-lg-2 ">
                    <input type="radio" name="demo" class="card-input-element d-none" value="demo2">
                    <div class="card card-body bg-light d-flex align-items-center mh-">
                    <img src="../{{$frame->image}}" alt="no estoy" class="w-100">
                    <div class="card-title">
                       {{$frame->name}}
                    </div>
                    <div class="card-description overflow-hidden">
                        {{$frame->description}}
                    </div>
                    </div>
                    </label>
          @endforeach
      </div>
    </div>

</form>



</div>
@endsection ('content')
