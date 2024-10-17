@extends('layouts.base')

@section('content')
    <div class="container mt-5">
        <h1>Pagos</h1>
        
        <!-- Botón para agregar un nuevo Pago -->
        <a href="{{ url('/pagos/create') }}" class="btn btn-primary mb-3">Agregar Nuevo Pago</a>
        <a href="{{ url('/pagos/pdf') }}" class="btn btn-danger mb-3">Descargar PDF</a> <!-- Botón para descargar PDF -->

        <table class="table table-bordered text-white">
            <thead class="thead-light">
                <tr>
                    <th>Id</th>
                    <th>Fecha Pago</th>
                    <th>Cantidad Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
            @foreach ($pagos as $pago) <!-- Aquí debe ser $pago en singular -->
                <tr>
                    <td>{{ $pago->Id }}</td>
                    <td>{{ $pago->Fecha_Pago }}</td>
                    <td>{{ $pago->Cantidad_Pago }}</td>
                    <td>
                        <!-- Botones de Editar y Borrar -->
                        <a href="{{ url('/pagos/' . $pago->Id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ url('/pagos/' . $pago->Id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger btn-sm">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="d-flex justify-content-center">
            {{ $pagos->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
