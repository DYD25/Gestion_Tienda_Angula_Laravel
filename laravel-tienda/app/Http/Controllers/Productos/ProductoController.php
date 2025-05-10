<?php

namespace App\Http\Controllers\Productos;

use Exception;
use App\Http\Controllers\Controller;
use App\Services\Productos\ProductoService;

class ProductoController extends Controller
{
    protected $productoService;
    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    public function consultar()
    {
        try {
            $consultar = $this->productoService->obtenerProductos();
            return response()->json($consultar);

        } catch (Exception $e) {
            return response()->json(['estado'=> false,'text' => 'No se pudo cargar la información de los productos','mensaje' => $e->getMessage()], 500);
        }

    }
}
