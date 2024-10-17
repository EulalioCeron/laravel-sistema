@extends('layouts.base')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Deudor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Editar Datos Deudor</h1>
        <form action="{{ url('/deudores/'.$deudor->Id_Deudores) }}" method="POST" ectype = "multipart/form-data">
            @csrf 
            @method('PATCH')
            @include('deudores.form',['Modo'=>'editar'])

        </form>
    </div>
</body>
</html>