<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Services\Clientes\ClienteService;

class ClienteController extends Controller
{
    protected $clienteService;

    public function __construct(ClienteService $clienteService)
    {
        $this->clienteService = $clienteService;
    }

 
    public function consultar(){
        $consultar = $this->clienteService->obtenerClientes();

        return response()->json($consultar);
        // dd($consultar);

    }
}
