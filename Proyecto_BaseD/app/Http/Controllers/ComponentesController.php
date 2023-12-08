<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ComponentesController extends Controller
{

    public function Mostrar(){
        $componentes=DB::select("select * from componentes");
         
        return
        view("common/head") .
        view("common/menu") .
        view("/componentes")->with('componentes',$componentes).
        view("common/footer");
    }

    public function create(Request $request_Componentes){
            try {
                $sql=DB::insert(" insert into componentes(Tija,Amortiguador,Ruedas_Delanteras,Ruedas_Traseras,Cambio_Delantero,Cambio_Trasero,Casstte,Bielas,Frenos,Rotores_Frenos)values(?,?,?,?,?,?,?,?,?,?) ", [
                    $request_Componentes->txtTija,
                    $request_Componentes->txtAmortiguador,
                    $request_Componentes->txtRuedas_Delanteras,
                    $request_Componentes->txtRuedas_Traseras,
                    $request_Componentes->txtCambio_Delantero,
                    $request_Componentes->txtCambio_Trasero,
                    $request_Componentes->txtCasstte,
                    $request_Componentes->txtBielas,
                    $request_Componentes->txtFrenos,
                    $request_Componentes->txtRotores_Frenos
         
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
                public function update(Request $request_Componentes){
                try {
                    $sql=DB::update(" update componentes set Tija=?, Amortiguador=?, Ruedas_Delanteras=?, Ruedas_Traseras=?, Cambio_Delantero=?, Cambio_Trasero=?, Casstte=?, Bielas=?, Frenos=?, Rotores_Frenos=? where idComponentes=? ", [
                        $request_Componentes->txtTija,
                        $request_Componentes->txtAmortiguador,
                        $request_Componentes->txtRuedas_Delanteras,
                        $request_Componentes->txtRuedas_Traseras,
                        $request_Componentes->txtCambio_Delantero,
                        $request_Componentes->txtCambio_Trasero,
                        $request_Componentes->txtCasstte,
                        $request_Componentes->txtBielas,
                        $request_Componentes->txtFrenos,
                        $request_Componentes->txtRotores_Frenos
             
                    ]);
                    if ($sql==0) {
                        $sql=1;
                    }
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Componentes editados correctamente");
            } else {
                return back()->with("Incorrecto","Error al editar");

            }    
            }

            public function delete($idComponentes){
                try {
                    $sql=DB::delete(" delete from componentes where idComponentes=$idComponentes ", [

            
                    ]);
                } catch (\Throwable $th) {
                    $sql = 0;
                }

            if ($sql == true){
                return back()->with("Correcto","Componentes eliminados correctamente");
            } else {
                return back()->with("Incorrecto","Error al eliminar");

            } 
            }


}
