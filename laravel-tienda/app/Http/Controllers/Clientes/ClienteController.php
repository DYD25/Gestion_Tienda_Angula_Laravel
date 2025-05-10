<?php
namespace App\Http\Controllers\Clientes;

use Exception;
use App\Http\Controllers\Controller;
use App\Services\Clientes\ClienteService;

class ClienteController extends Controller
{
    protected $clienteService;

    public function __construct(ClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }


    public function consultar()
    {
        try {
            $consultar = $this->clienteService->obtenerClientes();
            return response()->json($consultar);

        } catch (Exception $e) {
            return response()->json(['estado'=> false,'text' => 'No se pudo cargar la información de los clientes','mensaje' => $e->getMessage()], 500);
        }
    }
}
