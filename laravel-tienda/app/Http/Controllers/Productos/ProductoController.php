<?php

namespace App\Http\Controllers\Productos;

use App\Http\Controllers\Controller;
use App\Services\Productos\ProductoService;

class ProductoController extends Controller
{
    protected $productoService;
    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    public function consultar(){
        $consultar = $this->productoService->obtenerProductos();

        return response()->json($consultar);

    }
}
