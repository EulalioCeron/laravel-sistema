@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <h1>Deudores</h1>
        
        <!-- Botón para agregar un nuevo deudor -->
        <a href="{{ url('/deudores/create') }}" class="btn btn-primary mb-3">Agregar Deudor</a>
        <a href="{{ url('/deudores/pdf') }}" class="btn btn-danger mb-3">Descargar PDF</a> <!-- Botón para descargar PDF -->

        <table class="table table-bordered text-white">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Deuda</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($deudores as $deudor)
                <tr>
                    <td>{{ $deudor->Id_Deudores }}</td>
                    <td>{{ $deudor-> nombre }}</td>
                    <td>{{ $deudor->Monto_Deuda }}</td>
                    <td>
                        <!-- Botones de Editar y Borrar -->
                        <a href="{{ url('/deudores2/' . $deudor->Id_Deudores . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/deudores2/' . $deudor->Id_Deudores) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Agregar clase de Bootstrap para la paginación -->
        <div class="d-flex justify-content-center">
            {{ $deudores->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
