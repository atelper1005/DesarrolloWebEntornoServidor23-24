<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Mostrar todas las cuentas
    public function index() {
        return 'Lista Cuentas';
    }

    //Crear nueva cuenta
    public function create() {
        return 'Nueva cuenta creada';
    }

    //Actualizar cuenta
    public function update($id) {
        return 'Cuenta actualizada';
    }

    //Editar cuenta
    public function edit($id) {
        return 'Cuenta editada';
    }

    //Mostrar detalles de una cuenta
    public function show($id) {
        return 'Mostrar detalles cuenta';
    }

    //Borrar datos de una cuenta
    public function delete($id) {
        return 'Borrar cuenta';
    }
}
