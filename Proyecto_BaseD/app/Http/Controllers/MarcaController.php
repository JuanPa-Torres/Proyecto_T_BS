<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class MarcaController extends Controller
{

    public function Mostrar(){
        $marcas=DB::select("select * from marca");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/marca")->with('marca',$marcas).
        view("common/footer");
    }

    public function create(Request $request_Marca){
            try {
                $sql=DB::insert(" insert into usuarios(Nombre,Pais,Logo,Pais_Distribuidor,Distribuidor)values(?,?,?,?,?) ", [
                    $request_Marca->txtNombre,
                    $request_Marca->txtPais,
                    $request_Marca->txtLogo,
                    $request_Marca->txtPais_Distribuidor,
                    $request_Marca->txtDistribuidor 
         
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
                public function update(Request $request_Marca){
                try {
                    $sql=DB::update(" update usuarios set Nombre=?, Pais=?, Logo=?, Pais_Distribuidor=?, Distribuidor=? where idMarca=? ", [
                        $request_Marca->txtNombre,
                        $request_Marca->txtPais,
                        $request_Marca->Logo,
                        $request_Marca->txtPais_Distribuidor,
                        $request_Marca->txtDistribuidor 
              
            
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Marca editada correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idMarca){
                try {
                    $sql=DB::delete(" delete from marca where idMarca=$idMarca ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Marca eliminada correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
