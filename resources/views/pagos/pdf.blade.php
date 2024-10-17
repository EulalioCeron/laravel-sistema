<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pagos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Pagos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha Pago</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
                <tr>
                    <td>{{ $pago->Id }}</td>
                    <td>{{ $pago->Fecha_Pago }}</td>
                    <td>{{ $pago->Cantidad_Pago }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
