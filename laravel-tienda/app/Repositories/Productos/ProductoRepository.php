<?php
namespace App\Repositories\Productos;

use App\Models\Productos\Producto;
use Illuminate\Support\Facades\DB;

class ProductoRepository
{
    public function consultarProductos()
    {
        $productos = Producto::select(
            'Nombre',
            DB::raw('FORMAT(SUM(ValorC), 0) AS ValorC'),
            DB::raw('FORMAT(SUM(ValorV), 0) AS ValorV'),
            DB::raw('SUM(CASE WHEN EstadoId = 1 THEN 1 ELSE 0 END) AS Disponible'),
            DB::raw('COUNT(Nombre) as Cantidad'),
            DB::raw('MAX(Fecha) as Fecha'),
        )
        ->groupBy('Nombre')
        ->orderBy('Nombre', 'asc')
        ->get();

        return $productos;
    }
}
