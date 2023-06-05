<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

// Modelos
use App\Models\Comentario;
use App\Models\Banner;
use App\Models\Ciudad;
use App\Models\Estado;
use App\Models\Articulo;
use App\Models\Accione;
use App\Models\Contadore;
use App\Models\Contacto;
use App\Models\Video;
use App\Models\Encuesta;
use App\Models\Sintesi;

// request
use App\Http\Requests\ComentarioRequest;
use App\Mail\MensajeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class HomeController extends Controller
{

  protected $encuestas;
  protected $sintesis;

  public function __construct()
  {
    $this->encuestas = Encuesta::where(['activo' => '1'])->first();    
    $this->sintesis = Sintesi::where(['activo' => '1'])->get();    
  }
  

  public function index()
  {    
    
    $estados = Estado::all();
    $videos = Video::where(['activo' => '1'])->get();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias =  Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->take(3)->get();
    $acciones =  Accione::where(['activo' => '1'])->orderBy('created_at' , 'desc')->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores,
      'videos' => $videos,
      'encuestas' => $this->encuestas,
      'sintesis' => $this->sintesis,
    ];
    // regresamos la vista compilada
    // var_dump($instagram->getInstagramAuthUrl('christiancruzmx'));
    return view('home.index' , $parametros);
  }

  public function formulario()
  {
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias =  Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->take(3)->get();
    $acciones =  Accione::where(['activo' => '1'])->inRandomOrder()->take(3)->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores
    ];
    // regresamos la vista compilada
    return view('formulario.index' , $parametros);
  }

  // blog
  public function blog(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias = Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->paginate(9);
    $acciones =  Accione::where(['activo' => '1'])->inRandomOrder()->take(3)->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();

    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'titulo' => 'Blog',
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores
    ];

    return view('blog.index' , $parametros);
  }

  // accion
  public function accion(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias = Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->paginate(9);
    $acciones =  Accione::where(['activo' => '1'])->inRandomOrder()->take(3)->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();

    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'titulo' => 'Acción constante',
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores
    ];

    return view('acciones.index' , $parametros);
  }

  // blog interior
  public function interiorBlog(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticia = Articulo::where(['activo' => '1' , 'slug' => $request->slug])->first();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();

    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'titulo' => 'Blog',
      'noticia' => $noticia,
      'descripcion' => $noticia->contenido,
      'imgInt' => $noticia->img,
      'tituloNota' => $noticia->titulo,
      'contadores' => $contadores
    ];

    return view('interior.blog' , $parametros);
  }

  // accion interior
  public function accionInterior(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticia = Accione::where(['activo' => '1' , 'slug' => $request->slug])->first();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();

    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'titulo' => 'Blog',
      'noticia' => $noticia,
      'descripcion' => $noticia->contenido,
      'imgInt' => $noticia->img,
      'tituloNota' => $noticia->titulo,
      'accion' => true,
      'contadores' => $contadores
    ];

    return view('interior.blog' , $parametros);
  }

  // accion interior
  public function sintesisInterior(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'titulo' => 'Blog',      
      'accion' => true,
      'contadores' => $contadores
    ];
    if(isset($request->slug)){
      $noticia = Sintesi::where(['activo' => '1' , 'slug' => $request->slug])->first();
      $parametros['noticia'] = $noticia;
      $parametros['descripcion'] = $noticia->contenido;
      $parametros['imgInt'] = $noticia->img;
      $parametros['tituloNota'] = $noticia->titulo;      
    }else{
      $noticia = Sintesi::where(['activo' => '1'])->get();
      $parametros['sintesis'] = $noticia;

    }
    

    if(!isset($request->slug)){
      return view('sintesis.index' , $parametros);
    }

    return view('sintesis.interior' , $parametros);
  }

  function ciudades(Request $request){
    $id = $request->input('id');
    $ciudades = Ciudad::where('provincia' , $id)->get();
    return view('home.secciones.ciudad', compact('ciudades'))->render();
  }

  function doDenuncia(Request $request){
    if($request->ajax()){
      $comentario = new Comentario;
      if($comentario::where(['id'=> $request->id])->update(['activo' => 0])){
        return response(['msg' => 'Mensaje denunciado']);
      }else{
        return response(['error' => 'Fallo al denunciar mensaje']);
      }
    }
  }

  public function sendComentario(ComentarioRequest $request){
    $comentario = new Comentario;
    $comentario->nombre = $request->input('txtNombre');
    $comentario->email = $request->input('txtEmail');
    $comentario->comentario = $request->input('txtComentario');
    $comentario->id_articulo = $request->input('id');


    if($comentario->save()){
      // enviamos notificacion de email utilizando la clase
      // Mail::to(setting('site.correo'))->send(new MensajeMail($comentario));
      // enviamos respuesta al cliente
      return response(['msg'=>'Tu comentario ha sido enviado.']);
    }
    return response(['error'=>'Error al enviar tu mensaje']);
  }

  public function sendContacto(ComentarioRequest $request){
    $contacto = new Contacto;
    $contacto->nombre = $request->input('txtNombre');
    $contacto->email = $request->input('txtEmail');
    $contacto->comentario = $request->input('txtComentario');
    $contacto->organizacion = $request->input('txtNombreOrganizacion');
    $contacto->dedica = $request->input('txtDescOrganizacion');
    $contacto->evento = $request->input('txtEvento');Carbon::parse($request->datepicker);
    $contacto->fecha = Carbon::parse($request->input('txtFecha'));
    $contacto->municipio = $request->input('txtMunicipio');
    $contacto->asunto = $request->input('txtAsunto');
    $contacto->telefono = $request->input('txtTelefono');


    if($contacto->save()){
      // enviamos notificacion de email utilizando la clase
      Mail::to(setting('site.correo'))->send(new MensajeMail($contacto));
      // enviamos respuesta al cliente
      return response(['msg'=>'Tu comentario ha sido enviado.']);
    }
    return response(['error'=>'Error al enviar tu mensaje']);
  }

  public function typeForm(Request $request){

    $form  = $request->form;
    return view('formularios.' . $request->form, compact('form'))->render();

  }

  public function formType(Request $request){

    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias =  Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->take(3)->get();
    $acciones =  Accione::where(['activo' => '1'])->orderBy('created_at' , 'desc')->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();
    // enviamos parametros a la vista
    $parametros = [
      'estados' => $estados,
      'banners' => $banners,
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores,
      'form' => $request->form
    ];
    // regresamos la vista compilada
    return view('home.index' , $parametros);

  }

  public function contacto(Request $request){
    $estados = Estado::all();
    $banners =  Banner::where(['activo' => '1'])->orderBy('orden' , 'desc')->get();
    $noticias =  Articulo::where(['activo' => '1'])->orderBy('created_at' , 'desc')->take(3)->get();
    $acciones =  Accione::where(['activo' => '1'])->orderBy('created_at' , 'desc')->take(3)->get();
    $contadores =  Contadore::where(['activo' => '1'])->take(4)->get();
    // enviamos parametros a la vista
    $parametros = [
      'msg' => 'Mensaje enviado',
      'estados' => $estados,
      'banners' => $banners,
      'noticias' => $noticias,
      'acciones' => $acciones,
      'contadores' => $contadores
    ];
    // regresamos la vista compilada
    return view('contacto.index' , $parametros);
  }

}
