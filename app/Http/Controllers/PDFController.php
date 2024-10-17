<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf; // Importa el facade correcto

use App\Models\pago;
use App\Models\deudores;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF_Pagos()
    {
        $pagos = pago::all();

        #$pdf = PDF::loadView('pagos.pdf', ['users' => $users]);
        # // Genera el PDF con los datos de pagos
        $pdf = PDF::loadView('pagos.pdf', ['pagos' => $pagos]);

        return $pdf->download('pagos.pdf');
    }
    public function generatePDF_Deudores()
    {
        $deudores = deudores::all();

        # // Genera el PDF con los datos de Deudores
        $pdf = PDF::loadView('deudores.pdf', ['deudores' => $deudores]);

        return $pdf->download('deudores.pdf');
    }
}
