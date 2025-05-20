<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class Catalogo extends Controller
{
    public function inicio(){
        return view("pages.inicio",["titulo"=>"Inicio"]);
    }
    public function listado() {
        $consulta = Catalog::all();
        return view("pages.listado", [
            "titulo" => "Listado_peliculas",
            "datos" => $consulta
        ]);
    }
   public function agregar(){
        return view('pages.agregar', ['titulo' => 'Agregar nueva película']);
    } 
    public function editar(Request $request) {
        $consulta = Catalog::where("id",$request->id)->first();
        return view("pages.editar", [
            "titulo" => "Editar",
            "pelicula" => $consulta
        ]);
    }
    public function actualizar(Request $request, Catalog $pelicula) {
        $request->validate([
            'titulo' => 'required|string|max:255|regex:/^[\pL\s\.\,\-]+$/u',
            'descripcion' => 'required|string|max:500|regex:/^[\pL\s\.\,\-]+$/u',
            'genero' => 'required|string|max:100|regex:/^[\pL\s]+$/u',
            'director' => 'required|string|max:100|regex:/^[\pL\s]+$/u',
            'fecha_estreno' => 'required|date',
        ],[
            'titulo.required' => 'El campo Título es obligatorio',
            'titulo.regex' => 'El campo Título solo puede contener letras, espacios y algunos signos de puntuación',

            'descripcion.required' => 'El campo Descripción es obligatorio',
            'descripcion.regex' => 'El campo Descripción solo puede contener letras, espacios y algunos signos de puntuación',

            'genero.required' => 'El campo Género es obligatorio',
            'genero.regex' => 'El campo Género solo puede contener letras y espacios',

            'director.required' => 'El campo Director es obligatorio',
            'director.regex' => 'El campo Director solo puede contener letras y espacios',

            'fecha_estreno.required' => 'El campo Fecha de estreno es obligatorio',
            'fecha_estreno.date' => 'El campo Fecha de estreno debe tener un formato de fecha válido',
        ]);

        $pelicula->titulo=$request->titulo;
        $pelicula->descripcion=$request->descripcion;
        $pelicula->director=$request->director;
        $pelicula->genero=$request->genero;
        $pelicula->fecha_estreno=$request->fecha_estreno;
        $pelicula->save();

        return redirect()->route('list');
        
    }
    public function insertar_pelicula(Request $request){
        $request->validate([
            'titulo' => 'required|string|max:255|regex:/^[\pL\s\.\,\-]+$/u',
            'descripcion' => 'required|string|max:500|regex:/^[\pL\s\.\,\-]+$/u',
            'genero' => 'required|string|max:100|regex:/^[\pL\s\.\,\-]+$/u',
            'director' => 'required|string|max:100|regex:/^[\pL\s\.\,\-]+$/u',
            'fecha_estreno' => 'required|date',
        ],[
            'titulo.required' => 'El campo Título es obligatorio',
            'titulo.regex' => 'El campo Título solo puede contener letras, espacios y algunos signos de puntuación',

            'descripcion.required' => 'El campo Descripción es obligatorio',
            'descripcion.regex' => 'El campo Descripción solo puede contener letras, espacios y algunos signos de puntuación',

            'genero.required' => 'El campo Género es obligatorio',
            'genero.regex' => 'El campo Género solo puede contener letras y espacios',

            'director.required' => 'El campo Director es obligatorio',
            'director.regex' => 'El campo Director solo puede contener letras y espacios',

            'fecha_estreno.required' => 'El campo Fecha de estreno es obligatorio',
            'fecha_estreno.date' => 'El campo Fecha de estreno debe tener un formato de fecha válido',
        ]);
        $pelicula = new Catalog();
        $pelicula->titulo = $request->titulo;
        $pelicula->descripcion = $request->descripcion;
        $pelicula->director = $request->director;
        $pelicula->genero = $request->genero;
        $pelicula->fecha_estreno = $request->fecha_estreno;
        $pelicula->save();

        return redirect()->route('list');
    }
    public function eliminar_pelicula($id) {
        Catalog::destroy($id);
        return redirect()->route('list')->with('success', 'Película eliminada correctamente');
    }
    
}