<div class="col-md-3">
  <a href="{{route('home')}}">
    <img src="{{asset('storage/') . '/' . setting('site.logo')}}" alt="Chirstian cruz">
  </a>
</div>
<div class="col-md-9 d-sm-flex justify-content-center align-items-center">
  <ul class="list-inline d-sm-flex justify-content-center align-items-center">
    <li class="list-inline-item p-2"><a  class="bebas-neue s20" href="{{url('/home')}}#about">ACERCA DE MÍ</a></li>
    <!-- <li class="list-inline-item pr-4 "><a class="bebas-neue s20" href="#">GALERÍA</a></li> -->
    <li class="list-inline-item p-2"><a class="bebas-neue s20" href="{{url('/home')}}#accion-constante">ACCIÓN CONSTANTE</a></li>
    <li class="list-inline-item p-2"><a class="bebas-neue s20" href="{{url('/home')}}#timeline">TIMELINE</a></li>
    <li class="list-inline-item p-2"><a class="bebas-neue s20" href="{{url('/sintesis')}}">SÍNTESIS</a></li>
    <li class="list-inline-item p-2"><a href="{{route('blog')}}" class="bebas-neue s20">BLOG</a></li>
    <li class="list-inline-item p-2"><a class="bebas-neue s20" href="{{url('/home')}}#contacto">CONTACTO</a></li>
    <li class="list-inline-item p-2"><a target="_blank" href="{{setting('site.facebook')}}"><img data-icon="fb" class="icon-rrss" src="{{asset('images/fb.png')}}" alt="Facebook"></a></li>
    <li class="list-inline-item p-2"><a target="_blank" href="{{setting('site.twitter')}}"><img data-icon="tw" class="icon-rrss" src="{{asset('images/tw.png')}}" alt="Twitter"></a></li>
    <li class="list-inline-item p-2"><a target="_blank" href="{{setting('site.instagram')}}"><img data-icon="ig" class="icon-rrss" src="{{asset('images/ig.png')}}" alt="Instagram"></a></li>
    <li class="list-inline-item p-2"><a target="_blank" href="{{setting('site.youtube')}}"><img data-icon="yt" class="icon-rrss" src="{{asset('images/yt.png')}}" alt="YouTube"></a></li>

  </ul>
</div>
