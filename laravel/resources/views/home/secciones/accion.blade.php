<section id="accion-constante" class="pt-5 pb-5 mb-3">
  <style media="screen">
  .img-accion{
    min-height: 285px;
    background: #2e3131;
  }
  .transition h3{
    min-height: 100px;
    text-align: justify !important;
  }
  .transition p{
    text-align: justify !important;
  }
  .prev-slide-b {
    width: 30px;
    height: 30px;
    background-image: url(./images/chevron-back-circle-outline.svg);
    background-size: cover;
    filter: invert(1);
    position: absolute;
    top: 35%;
    left: -5%;
    z-index: 999999;
}
.next-slide-b {
    width: 30px;
    height: 30px;
    background-image: url(./images/chevron-forward-circle-outline.svg);
    background-size: cover;
    filter: invert(1);
    position: absolute;
    top: 35%;
    right: -5%;
    z-index: 999999;
}
.leftImg{
  position: absolute;
  top: 35%;
  left: -2%;
  z-index: 999999;

}
.rightImg{
  position: absolute;
  top: 35%;
  right: -3%;
  z-index: 999999;
}
</style>
<div class="container">
  <h2 class="text-center main-title s30">ACCIÓN CONSTANTE</h2>
  <div class="row owl-carousel owl-accion owl-theme z-0">
    @if($acciones->count() > 0)    
    @foreach($acciones as $accion)
    <div class="item">
                        
      <div class="p-2">
              <div class="uk-card uk-card-default">
                  <div class="uk-card-media-top" style="min-height: 200px;max-height: 200px;overflow: hidden;">
                      <img src="{{Voyager::image($accion->thumbnail('medium' ,'img'))}}" alt="{{$accion->titulo}}">
                  </div>
                  <div class="uk-card-body" style="min-height: 285px;max-height: 285px;">
                      <h3 class="uk-card-title font-weight-bold text-uppercase bebas-book main-color text-justify">{!! \Illuminate\Support\Str::limit($accion->titulo , 50 , '...')!!}</h3>
                      <p class="text-justify">{!! \Illuminate\Support\Str::limit($accion->bullet , 155 , '...')!!}</p>
                  </div>
                  <div class="uk-card-footer">
                      <a href="{{route('accion.interior' , $accion->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
                  </div>
              </div>
          </div>  
      {{-- <div class="card mt-3" data-aos="flip-left">
          <a href="{{route('blog.interior' , $accion->slug)}}">
              <img class="card-img-top" src="{{Voyager::image($accion->thumbnail('medium' ,'img'))}}" alt="{{$accion->titulo}}">
          </a>
          <div class="card-body">
              <h3 class="card-title font-weight-bold text-uppercase bebas-book main-color text-justify">{{$accion->titulo}}</h3>
              <small class="card-title">{{$accion->bullet}}</small>
              {!! \Illuminate\Support\Str::limit($accion->contenido , 155 , '...')!!}
              <p>
              <small class="text-muted float-left">{{$accion->created_at->format('d M Y')}}</small>
              <a href="{{route('blog.interior' , $accion->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
              </p>
              
          </div>
      </div> --}}
  </div>    
    @endforeach  
    @endif
  </div>  
  <div class="text-center pt-5 pb-5">
    <a class="btn see-more text-light" href="{{url('accion')}}">VER MÁS</a>
  </div>
</div>

</section>
