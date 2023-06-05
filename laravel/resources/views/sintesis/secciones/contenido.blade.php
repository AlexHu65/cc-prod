<section class="pt-5 pb-5" id="contentBlog">
<style media="screen">
  .contenido p{
    text-align: justify !important;
  }
  #contentBlog{
    height: 980px;
  }
</style>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content-blog">          
          <div class="bullet pb-3">
            <h2 class="bebas-book font-weight-bold pt-3 m-0">
              {{$noticia->titulo}}
            </h2>
            <div class="text-muted">{{$noticia->created_at->format('d M Y')}}</div>
          </div>
          <div class="contenido pt-3 pb-3">
            {!! $noticia->codigo !!}
          </div>
          <div class="contenido pt-3 pb-3">
            {!! $noticia->descripcion !!}
          </div>
        </div>
      </div>
    </div>    
    <div class="row">
      <div class="col-md-12">
        <div class="interactions d-flex justify-content-start align-items-center mt-3 mb-3">
          <div class="comments p-2"><small class="text-muted"></div>
          <div class="share p-2"><strong class="text-muted">Compartir:</strong>
            <div class="addthis_inline_share_toolbox"></div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</section>
