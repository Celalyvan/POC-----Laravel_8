<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        $curso = Curso::all();

        return $curso;

        return view('cursos.index');
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function show($curso)
    {
        return view('cursos.show', compact('curso'));//para pasarle variables a la viw necesito hacerlo con un array clave-valor con el nombre de la variable que quiero mostrar, para eso puedo hacer el array a mano(ej: ['curso'=>$curso] ). Otra opcion y en caso de q quiera enviar la variable con el mismo nombre q  con el q la estoy recibiendo puedo usar el metodo comact que genera un array de ese mismo formato (ej: compact('curso') retornaria ['curso'=>$curso])  
    }
}
