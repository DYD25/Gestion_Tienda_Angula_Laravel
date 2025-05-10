<?php
namespace App\Services\Productos;

use Throwable;
use Exception;
use App\Repositories\Productos\ProductoRepository;

class ProductoService
{
    private $productoRespository;

    public function __construct(ProductoRepository $productoRespository)
    {
        $this->productoRespository = $productoRespository;
    }

    public function obtenerProductos()
    {
        try {
            $productos = $this->productoRespository->consultarProductos();
            return $productos;
        }catch (Throwable $th){
            throw new Exception("Error al consultar el producto: " . $th->getMessage());
        }
    }

}
