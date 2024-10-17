<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    // Especifica la tabla si no sigue la convención de nombre
    protected $table = 'pagos';

    // Especifica la clave primaria si no es 'id'
    protected $primaryKey = 'Id';

    // Indica que la clave primaria no es un entero autoincremental
    public $incrementing = false;

    // Define el tipo de la clave primaria
    protected $keyType = 'int'; // Cambia a 'string' si la clave primaria es una cadena

    // Desactiva los timestamps
    public $timestamps = false;

    // Especifica las columnas que se pueden asignar masivamente
    protected $fillable = ['Id', 'Fecha_Pago', 'Cantidad_Pago'];
}
