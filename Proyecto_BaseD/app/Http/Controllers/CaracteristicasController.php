<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class CaracteristicasController extends Controller
{

    public function Mostrar(){
        $caracteristicas=DB::select("select * from caracteristicas");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/caracteristicas")->with('caracteristicas',$caracteristicas).
        view("common/footer");
    }

    public function create(Request $request_Caracteristicas){
            try {
                $sql=DB::insert(" insert into caracteristicas(Talla_Cuadro,Material,Colores_Disponibles,Geometrias,Peso,Limite_Peso,Garantia)values(?,?,?,?,?,?,?) ", [
                    $request_Caracteristicas->txtTalla_Cuadro,
                    $request_Caracteristicas->txtMaterial,
                    $request_Caracteristicas->txtColores_Disponibles,
                    $request_Caracteristicas->txtGeometrias,
                    $request_Caracteristicas->txtPeso,
                    $request_Caracteristicas->txtLimite_Peso,
                    $request_Caracteristicas->txtGarantia,
         
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
                public function update(Request $request_Caracteristicas){
                try {
                    $sql=DB::update(" update caracteristicas set Talla_Cuadro=?, Material=?, Colores_Disponibles=?, Geometrias=?, Peso=? , Limite_Peso=? , Garantia=? where idCaracteristicas=? ", [
                        $request_Caracteristicas->txtTalla_Cuadro,
                        $request_Caracteristicas->txtMaterial,
                        $request_Caracteristicas->txtColores_Disponibles,
                        $request_Caracteristicas->txtGeometrias,
                        $request_Caracteristicas->txtPeso,
                        $request_Caracteristicas->txtLimite_Peso,
                        $request_Caracteristicas->txtGarantia,
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Caracteristicas editado correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idCaracteristicas){
                try {
                    $sql=DB::delete(" delete from caracteristicas where idCaracteristicas=$idCaracteristicas ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Caracteristicas eliminadas correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
