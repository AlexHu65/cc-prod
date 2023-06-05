<section id="entradasBlog" class="pt-5 pb-5">

    <div class="container">
        <h2 class="text-center main-title s30">BLOG</h2>
        <div class="row d-flex justify-content-center">
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
                        {{-- <div class="card mt-3" data-aos="flip-left">
                            <a href="{{route('blog.interior' , $noticia->slug)}}">
                                <img class="card-img-top" src="{{Voyager::image($noticia->thumbnail('medium' ,'img'))}}" alt="{{$noticia->titulo}}">
                            </a>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold text-uppercase bebas-book main-color text-justify">{{$noticia->titulo}}</h3>
                                <small class="card-title">{{$noticia->bullet}}</small>
                                {!! \Illuminate\Support\Str::limit($noticia->contenido , 155 , '...')!!}
                                <p>
                                <small class="text-muted float-left">{{$noticia->created_at->format('d M Y')}}</small>
                                <a href="{{route('blog.interior' , $noticia->slug)}}" class="float-right active-blue font-weight-bold mb-3">Leer Más</a>
                                </p>
                                
                            </div>
                        </div> --}}
                    </div>
                    @endforeach
                    <div class="text-center pt-5 pb-5">
                        <a class="btn see-more text-light" href="{{url('blog')}}">VER MÁS</a>
                    </div>
                @endif
        </div>
    </div>
</section>
