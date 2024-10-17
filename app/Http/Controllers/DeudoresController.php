<?php

namespace App\Http\Controllers;

use App\Models\deudores;
use Illuminate\Http\Request;


class DeudoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #$datos = deudores::paginate(3);
        $datos['deudores'] = deudores::paginate(3);
        return view('deudores.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deudores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #$datosDeudor = request()->all();
        $datosDeudor = request()->except('_token');
        deudores::insert($datosDeudor);
        return redirect('/deudores')->with('success', 'Deudor agregado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(deudores $deudores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Id_Deudores)
    {
        $deudor = Deudores::findOrFail($Id_Deudores);
        return view('deudores.edit', compact('deudor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Id_Deudores)
    {

        $datosDeudor = request()->except(['_token', '_method']);
        // Actualizar el registro
        Deudores::where('Id_Deudores', $Id_Deudores)->update($datosDeudor);

        // Redirigir con un mensaje de éxito
        return redirect('/deudores')->with('success', 'Datos actualizados exitosamente!');


        #deudores::where('id', '=', $Id_Deudores)->update($datosDeudor);

        #$deudor = Deudores::findOrFail($Id_Deudores);
        #return view('deudores.edit', compact('deudor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Id_Deudores)
    {

        // Usa findOrFail para buscar el registro
        $deudor = Deudores::findOrFail($Id_Deudores);

        // Elimina el registro
        $deudor->delete();

        return redirect('/deudores')->with('success', 'Deudor eliminado exitosamente!');
    }
}
