<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ModeloController extends Controller
{

    public function Mostrar(){
        $modelos=DB::select("select * from modelo");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/modelo")->with('modelo',$modelos).
        view("common/footer");
    }

    public function create(Request $request_Modelo){
            try {
                $sql=DB::insert(" insert into modelo(Nombre,Modalidad,Año,Gama)values(?,?,?,?) ", [
                    $request_Modelo->txtNombre,
                    $request_Modelo->txtModalidad,
                    $request_Modelo->txtAño,
                    $request_Modelo->txtGama
         
                ]);
            } catch (\Throwable $th) {
                $sql = 0;
            }

        if ($sql == true){
            return back()->with("Correcto","Registrado Correctamente");
        } else {
            return back()->with("Incorrecto","Error al registrar");

        }    
}
                public function update(Request $request_Modelo){
                try {
                    $sql=DB::update(" update modelo set Nombre=?, Modalidad=?, Año=?, Gama=? where idModelo=? ", [
                    $request_Modelo->txtNombre,
                    $request_Modelo->txtModalidad,
                    $request_Modelo->txtAño,
                    $request_Modelo->txtGama 
            
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Modelo editado correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($modelo){
                try {
                    $sql=DB::delete(" delete from modelo where idModelo=$modelo ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Modelo eliminado correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
