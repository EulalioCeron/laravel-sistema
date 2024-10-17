<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\pago;
use Illuminate\Http\Request;


class pagoController extends Controller
{

    public function index(Request $request)
    {
        $datos['pagos'] = pago::paginate(3);
        return view('pagos.index', $datos);
    }

    public function create()
    {
        return view('pagos.create');
    }

    public function store(Request $request)
    {
        $datosPago = request()->except('_token');
        pago::insert($datosPago);
        return redirect('/pagos')->with('success', 'Deudor agregado exitosamente');
    }

    public function show($id) {}

    public function edit($Id)
    {
        $pago = pago::findOrFail($Id);
        return view('pagos.edit', compact('pago'));
    }

    public function update(Request $request, $Id)
    {
        $datosPago = request()->except(['_token', '_method']);
        // Actualizar el registro
        pago::where('Id', $Id)->update($datosPago);

        // Redirigir con un mensaje de éxito
        return redirect('/pagos')->with('success', 'Datos actualizados exitosamente!');
    }

    public function destroy($Id)
    {

        // Usa findOrFail para buscar el registro
        $pago = pago::findOrFail($Id);

        // Elimina el registro
        $pago->delete();

        return redirect('/pagos')->with('success', 'Deudor eliminado exitosamente!');
    }
}
