<?php

namespace App\Repositories\Clientes;

use App\Models\Clientes\Cliente;

class ClienteRepository
{
    public function obtenerTodos()
    {
        return Cliente::all()-> toArray();
    }

    public function obtenerPorId($id)
    {
        return Cliente::findOrFail($id);
    }

    // Puedes agregar más métodos como guardar, eliminar, actualizar, etc.
}
