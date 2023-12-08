<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class UsuarioController extends Controller
{

    public function Mostrar(){
        $usuarios=DB::select("select * from usuarios");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/usuario")->with('usuarios',$usuarios).
        view("common/footer");
    }

    public function create(Request $request){
            try {
                $sql=DB::insert(" insert into usuarios(Nombre,Apell_Paterno,Pais,Correo_Elec,Contraseña)values(?,?,?,?,?) ", [
                    $request->txtNombre,
                    $request->txtApell_Paterno,
                    $request->txtPais,
                    $request->txtCorreo,
                    $request->txtContraseña 
         
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
                public function update(Request $request){
                try {
                    $sql=DB::update(" update usuarios set Nombre=?, Apell_Paterno=?, Pais=?, Correo=?, Contraseña=? where idUsuario=? ", [
                        $request->txtNombre,
                        $request->txtApell_Paterno,
                        $request->txtPais,
                        $request->txtCorreo,
                        $request->txtContraseña 
            
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Usuario editado correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idUsuario){
                try {
                    $sql=DB::delete(" delete from usuarios where idUsuario=$idUsuario ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Usuario eliminado correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
