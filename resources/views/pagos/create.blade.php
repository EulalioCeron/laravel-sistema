@extends('layouts.base')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pago</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Agregar Nuevo Pago</h1>
        <form action="{{ url('/pagos/') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('pagos.form',['Modo'=>'crear'])
        </form>
    </div>
</body>
</html>