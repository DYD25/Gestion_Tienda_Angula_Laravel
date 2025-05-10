<?php
namespace App\Services\Clientes;

use Throwable;
use Exception;
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
        try {
            $clientes = $this->clienteRepository->obtenerTodos();
            return $clientes;
        } catch (Throwable $e) {
            throw new Exception("Error al obtener los clientes: " . $e->getMessage());
        }
    }
}
