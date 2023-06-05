<?php

namespace App\Models;
use TCG\Voyager\Traits\Resizable;

use Illuminate\Database\Eloquent\Model;


class Articulo extends Model
{

    use Resizable;
    protected $table = "articulos";

    public function comentarios(){
        return $this->hasMany('App\Models\Comentario', 'id_articulo');
    }

}
