<section id="sintesis-informativa" class="pt-5 pb-5 mb-3">
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
    <h2 class="text-center main-title s30">SINTESIS INFORMATIVA</h2>
    <div class="row d-flex justify-content-center owl-carousel owl-sintesis owl-theme  z-0">
      @if($sintesis->count() > 0)
      <?php $number = 1; ?>    
      @foreach($sintesis as $sin)
      <div style="width: 100%;" class="item col-sm-12 col-md-4">
        <div class="transition">
          <div class="img-accion transition mt-5">
            <a href="{{route('sintesis.interior' , $sin->slug)}}">
              <img src="{{Voyager::image($sin->thumbnail('medium' ,'img'))}}" alt="{{$sin->titulo}}">
            </a>
          </div>
          <div class="title-accion pt-2 ml-4 relative">
            <h2 class="gray-secondary pt75 absolute bebas-bold number-accion">0{{$number}}</h2>
  
            <h3 class="bebas-bold deep-blue relative">{{$sin->titulo}}</h3>  
            <div class="line-blue"></div>            
            <p>
            <a href="{{route('sintesis.interior' , $sin->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
            </p>
          </div>
        </div>
      </div>    
      <?php $number++; ?>
      @endforeach    
      
      @endif
    </div>  
    {{-- <div class="text-center pt-5 pb-5">
      <a class="btn see-more text-light" href="{{url('accion')}}">VER MÁS</a>
    </div> --}}
  </div>
  
  </section>
  