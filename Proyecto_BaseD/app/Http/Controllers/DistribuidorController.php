<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class DistribuidorController extends Controller
{

    public function Mostrar(){
        $distribuidores=DB::select("select * from distribuidor");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/distribuidor")->with('distribuidor',$distribuidores).
        view("common/footer");
    }

    public function create(Request $request_Distribuidor){
            try {
                $sql=DB::insert(" insert into distribuidor(Nombre,Ciudad,Telefono,Correo)values(?,?,?,?) ", [
                    $request_Distribuidor->txtNombre,
                    $request_Distribuidor->txtCuidad,
                    $request_Distribuidor->txtTelefono,
                    $request_Distribuidor->txtCorreo

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
                public function update(Request $request_Distribuidor){
                try {
                    $sql=DB::update(" update distribuidor set Nombre=?, Ciudad=?, Telefono=?, Correo=? where idDistribuidor=? ", [
                        $request_Distribuidor->txtNombre,
                        $request_Distribuidor->txtCiudad,
                        $request_Distribuidor->txtTelefono,
                        $request_Distribuidor->txtCorreo
            
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Distribuidor editado correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idDistribuidor){
                try {
                    $sql=DB::delete(" delete from distribuidor where idDistribuidor=$idDistribuidor ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Distribuidor eliminado correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
