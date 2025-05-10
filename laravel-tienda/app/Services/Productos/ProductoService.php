<?php
namespace App\Services\Productos;
use App\Models\Productos\Producto;

class ProductoService
{
    public function obtenerProductos()
    {
        return Producto::all()->toArray();
    }

}
