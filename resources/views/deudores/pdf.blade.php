<!DOCTYPE html>
<html>
<head>
    <title>Lista de Deudores</title>
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
    <h1>Lista de Deudores</h1>
    <table>
        <thead>
            <tr>
                <th>ID Deudores</th>
                <th>Nombre</th>
                <th>Monto Deuda</th>
            </tr>
        </thead>
        <tbody>
            @foreach($deudores as $deudor)
                <tr>
                    <td>{{ $deudor->Id_Deudores }}</td>
                    <td>{{ $deudor->nombre }}</td>
                    <td>{{ $deudor->Monto_Deuda }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
