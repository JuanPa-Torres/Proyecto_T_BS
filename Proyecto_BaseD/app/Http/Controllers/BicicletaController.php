<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class BicicletaController extends Controller
{

    public function Mostrar(){
        $bicicletas=DB::select("select * from bicicleta");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/bicicleta")->with('bicicleta',$bicicletas).
        view("common/footer");
    }

    public function create(Request $request_Bicicleta){
            try {
                $sql=DB::insert(" insert into bicicleta(idBicicleta,Marca,Modelo,Componentes,Caracteristicas,Precio)values(?,?,?,?,?) ", [
                    $request_Bicicleta->txtIdBicicleta,
                    $request_Bicicleta->txtMarca,
                    $request_Bicicleta->txtModelo,
                    $request_Bicicleta->txtComponentes,
                    $request_Bicicleta->txtCaracteristicas,
                    $request_Bicicleta->txtPrecio
 
         
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
                public function update(Request $request_Bicicleta){
                try {
                    $sql=DB::update(" update bicicleta set idBicicleta=?, Apell_Paterno=?, Marca=?, Modelo=?, Componentes=?, Caracteristicas=?, Precio=? where idBicicleta=? ", [
                   
                        $request_Bicicleta->txtIdBicicleta,
                        $request_Bicicleta->txtMarca,
                        $request_Bicicleta->txtModelo,
                        $request_Bicicleta->txtComponentes,
                        $request_Bicicleta->txtCaracteristicas,
                        $request_Bicicleta->txtPrecio

                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Bicicleta editada correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idBicicleta){
                try {
                    $sql=DB::delete(" delete from bicicleta where idBicicleta=$idBicicleta ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Bicicleta eliminada correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
