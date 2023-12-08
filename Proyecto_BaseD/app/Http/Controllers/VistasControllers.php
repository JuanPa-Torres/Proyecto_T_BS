<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VistasController extends Controller
{
    //
 
    #función para realizar la descarga de la base de datos
    public function descarga()
    {

        $ubicacionDescarga = getcwd() . DIRECTORY_SEPARATOR . "RespaldoBD_" . date("Y-m-d") . "Proyecto_B_D.sql";
        $salida = "";
        $codigoSalida = 0;
        $comando = sprintf("%s --user=\"%s\" --password=\"%s\" %s > %s", env("UBICACION_MYSQLDUMP"), env("DB_USERNAME"), env("DB_PASSWORD"), env("DB_DATABASE"), $ubicacionDescarga);
        exec($comando, $salida, $codigoSalida);
        if ($codigoSalida !== 0) {
            return "Código de salida distinto de 0, se obtuvo código (" . $codigoSalida . "). Revise los ajustes e intente de nuevo";
        }
        return response()->download($ubicacionDescarga)->deleteFileAfterSend(true);
    }
// ----------------------------------------------------------------------------------------------------------------------------
    public function vista1()
    {
        $usuarios = DB::table('vw_Usuario_Perfil_Emai')->select('u.Nombre, u.Apell_Paterno, p.Perfil, u.Correo_Elec')->get();
        return view("vistas.v1", compact("usuarios"));

    }

    public function vista2()
    {
        $bicicleta = DB::table('vw_Bicicleta_Modelo_Precio_Promedio')->select('m.Nombre AS Modelo, AVG(b.Precio) AS Precio_Promedio')->get();
        return view("vistas.v2", compact("bicicleta"));
    }
    public function vista3()
    {
        $bicicleta = DB::table('vw_Bicicleta_Fecha_Creacion')->select('*')->get();
        return view("vistas.v3", compact("bicicleta"));
    }
    public function vista4()
    {
        $modelo = DB::table('vw_modelos-total')->select('*')->get();
        return view("vistas.v4", compact("modelo"));
    }
    public function vista5()
    {
        $bicicleta = DB::table('vw_Bicicleta_Rango_Precio')->select('Bicicleta
        WHERE Precio BETWEEN 500 AND 1500;')->get();
        return view("vistas.v5", compact("bicicleta"));
    }

}