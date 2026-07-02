<?php

namespace App\Http\Controllers;

use App\Models\Agencia;
use App\Models\Hotel;
use App\Models\Particular;

class ConsultasController extends Controller
{

    public function reservasPorAgencia()
    {
        $agencias = Agencia::included()
                        ->filter()
                        ->sort()
                        ->getOrPaginate();

        return response()->json($agencias);
    }


    public function reservasPorParticulares()
    {
        $particulares = Particular::included()
                                ->filter()
                                ->sort()
                                ->getOrPaginate();

        return response()->json($particulares);
    }


    public function hotelesConCategoria()
    {
        $hoteles = Hotel::included()
                        ->filter()
                        ->sort()
                        ->getOrPaginate();

        return response()->json($hoteles);
    }
}