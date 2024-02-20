<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //Mostrar todos los clientes
    public function index() {
        return 'Lista Clientes';
    }

    //Crear nuevo cliente
    public function create() {
        return 'Nuevo cliente creado';
    }

    //Mostrar detalles de un cliente
    public function show($id) {
        return 'Mostrar detalles cliente';
    }

    //Actualizar datos de un cliente
    public function update($id) {
        return 'Actualizar cliente';
    }

    //Borrar cliente
    public function delete($id) {
        return 'Borrar cliente';
    }
}
