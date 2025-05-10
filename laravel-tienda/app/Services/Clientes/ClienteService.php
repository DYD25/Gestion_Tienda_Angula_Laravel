<?php

namespace App\Services\Clientes;

use App\Repositories\Clientes\ClienteRepository;

class ClienteService
{
    protected $clienteRepository;

    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function obtenerClientes()
    {
        return $this->clienteRepository->obtenerTodos();
    }
}
