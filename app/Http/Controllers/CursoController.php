<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        $cursos = Curso::orderBy('id','desc')->paginate(15);

        return view('cursos.index', compact('cursos')); //la el metodo compact() pasa la informacion de la variable pasada en formato string a la vista, pero convertida en un arreglo
        

    }

    public function create()
    {
        return view('cursos.create');
    }
    
    public function store(Request $request)
    {
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->categoria = $request->categoria;
        $curso->descripcion = $request->descripcion;

        $curso->save();

        return redirect()->route('cursos.show',$curso->id); //Laravel es capaz de interpretar que tiene qe usar la id de este objeto, entonces si pasara $curso seria igualmente funcional
    }

    public function show($id)
    {
        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));//para pasarle variables a la viw necesito hacerlo con un array clave-valor con el nombre de la variable que quiero mostrar, para eso puedo hacer el array a mano(ej: ['curso'=>$curso] ). Otra opcion y en caso de q quiera enviar la variable con el mismo nombre q  con el q la estoy recibiendo puedo usar el metodo comact que genera un array de ese mismo formato (ej: compact('curso') retornaria ['curso'=>$curso])  
    }

    public function edit(Curso $curso) //por parametro recibo la id del curso, pero Laravel es capaz de interpretar, anteponiendo el tipo de dato, que quiero usar la instancia de Curso con ese id. Es decir, al poner "Curso $curso" (siendo $curso la id) Laravel automaticamente va a buscar el Curso con ese id 
    {
        //$curso = Curso::find($id);

        return view('cursos.edit', compact('curso'));//compact() transforma el objeto tipo json a array
    }

}
