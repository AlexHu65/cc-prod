<section id="video-columna" class="pt-5 pb-5 mb-3">
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
    <h2 class="text-center main-title s30">VIDEO COLUMNA</h2>
    <div class="row d-flex justify-content-center owl-carousel owl-video owl-theme z-0">
      @if($videos->count() > 0)
      <?php $number = 1; ?>    
      @foreach($videos as $video)
      <div style="width: 100%;" class="item col-sm-12 col-md-12 d-flex justify-content-center flex-column align-items-center">
        <div class="transition d-flex justify-content-center flex-column align-items-center">
            <video width="320" height="240" controls>
                @php
                    
                    // print_r($video->link);
                    $file = (json_decode($video->link))[0]->download_link; 

                @endphp
                <source src="{{ asset("storage/$file")}}" type="video/mp4">
            </video>
          <div class="title-accion pt-2 ml-4 relative">  
            <h3 class="bebas-bold deep-blue relative">{{$video->titulo}}</h3>              
          </div>
        </div>
      </div>    
      <?php $number++; ?>
      @endforeach  
      @endif
    </div>      
  </div>
  
  </section>
  