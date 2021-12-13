<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = 'users'; agregando este atributo indico a que tabla de la Base de Datos quiero que refiera este modelo (esto implicaria romper con las convenciones)

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
