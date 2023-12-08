<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    //

    public function consulta1()
    {
        
            $cantidadPorGama = DB::table('Bicicleta')
            ->join('Modelo', 'Bicicleta.Modelo', '=', 'Modelo.idModelo')
            ->select('Modelo.Gama', DB::raw('count(*) as Total'))
            ->groupBy('Modelo.Gama')
            ->get();
    }

    public function consulta2()
    {
      
        $bicicletasPorPais = DB::table('Bicicleta')
            ->join('Marca', 'Bicicleta.Marca', '=', 'Marca.idMarca')
            ->where('Marca.Pais_Origen', '=', 'NombreDePais')
            ->get();

    }
    public function consulta3()
    {
        $distribuidoresConMarcas = DB::table('Distribuidor')
            ->leftJoin('Marca', 'Distribuidor.idDistribuidor', '=', 'Marca.Distribuidor')
            ->select('Distribuidor.Nombre as NombreDistribuidor', 'Marca.Nombre as NombreMarca')
            ->get();
    }
}