<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeudoresSeeder extends Seeder
{
    public function run()
    {
        DB::table('deudores')->insert([
            'Id_Deudores' => 1,          // Asumiendo que 'Id_Deudores' es la clave primaria, se puede asignar un valor manual o dejar que la base de datos lo genere automáticamente si está configurada para autoincrementar.
            'nombre' => 'Juan Perez',    // Valor para el nombre (tipo VARCHAR)
            'Monto_Deuda' => 5000        // Valor para el monto de deuda (tipo INT)
        ]);

        // Puedes agregar más registros según sea necesario
        DB::table('deudores')->insert([
            'Id_Deudores' => 2,
            'nombre' => 'Maria Garcia',
            'Monto_Deuda' => 7500
        ]);
    }
}
