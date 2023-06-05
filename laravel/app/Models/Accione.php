<?php

namespace App\Models;
use TCG\Voyager\Traits\Resizable;

use Illuminate\Database\Eloquent\Model;


class Accione extends Model
{
    use Resizable;
    protected $table = "acciones";

}
