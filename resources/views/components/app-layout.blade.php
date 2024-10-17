<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Layout</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <header>
            <!-- Aquí puedes agregar el contenido del encabezado -->
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer>
            <!-- Aquí puedes agregar el contenido del pie de página -->
        </footer>
    </div>
</body>
</html>
