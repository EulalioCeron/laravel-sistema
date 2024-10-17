<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Panel de Administración</h1>
        <div class="mt-4">
            <a href="{{ url('/deudores') }}" class="btn btn-primary">Deudores</a>
            <a href="{{ url('/pagos') }}" class="btn btn-secondary">Pagos</a>
        </div>
    </div>
</body>
</html>
