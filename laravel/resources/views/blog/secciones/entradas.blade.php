<section id="entradasBlog" class="pt-5 pb-5">
  <div class="container">
    <div class="row d-flex">
      @if ($noticias->count() > 0)
      @foreach($noticias as $noticia)
      <div class="col-md-4">
        <div class="pt-5">
          <div class="uk-card uk-card-default">
              <div class="uk-card-media-top" style="min-height: 200px;max-height: 200px;overflow: hidden;">
                  <img src="{{Voyager::image($noticia->thumbnail('medium' ,'img'))}}" alt="{{$noticia->titulo}}">
              </div>
              <div class="uk-card-body" style="min-height: 285px;max-height: 285px;">
                  <h3 class="uk-card-title font-weight-bold text-uppercase bebas-book main-color text-justify">{!! \Illuminate\Support\Str::limit($noticia->titulo , 50 , '...')!!}</h3>
                  <p class="text-justify">{!! \Illuminate\Support\Str::limit($noticia->bullet , 155 , '...')!!}</p>
              </div>
              <div class="uk-card-footer">
                  <a href="{{route('blog.interior' , $noticia->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
              </div>
          </div>
      </div>  
      </div>
      @endforeach
      @endif
    </div>
    <div class="row">
      <div class="container d-flex justify-content-center pt-3 pb-3">
        {{$noticias ?? ''->links()}}
      </div>
    </div>
  </div>
</section>
