<?php
namespace App\Repositories\Productos;
use App\Models\Productos\Producto;
class ProductoRepository
{
    public function obtenerTodos()
    {
        return Producto::all()->toArray();
    }
}
