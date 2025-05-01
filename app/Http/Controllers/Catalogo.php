<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalog;

class Catalogo extends Controller
{
    public function inicio(){
        return view("pages.inicio",["titulo"=>"Inicio"]);
    }
/*     public function listado(){
        $consulta= Catalog::select("titulo","descripcion")->all();
        /*$consulta= Catalog::frist();
         $consulta= Catalog::all();
        $consulta= Catalog::get(); 
        $datos = $consulta;
        return view("pages.listado",["titulo"=>"Listado_peliculas", "datos"=>$datos]);
    } */
    public function listado() {
        $consulta = Catalog::all();
        return view("pages.listado", [
            "titulo" => "Listado_peliculas",
            "datos" => $consulta
        ]);
    }
    public function guardar(Request $request) {
        Catalog::create($request->all());
        return redirect()->route('list');
    }
    
    public function editar($id) {
        $pelicula = Catalog::findOrFail($id);
        return view("pages.editar", [
            "titulo" => "Editar",
            "pelicula" => $pelicula
        ]);
    }
    
    public function actualizar(Request $request, $id) {
        $pelicula = Catalog::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('list');
    }
    
    public function eliminar($id) {
        Catalog::destroy($id);
        return redirect()->route('list');
    }
    public function agregar(){
    return view('pages.agregar', ['titulo' => 'Agregar nueva película']);
    }

}