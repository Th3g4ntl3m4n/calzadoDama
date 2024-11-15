<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

    use HasFactory;

    protected $fillable = [
       'ID_Cliente',
        'Fecha_venta',
        'producto',
        'cantidad',
        'Monto_total',
    ];
}
