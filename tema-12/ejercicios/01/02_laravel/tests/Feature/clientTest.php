<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class clientTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_edit(): void
    {
        $response = $this->get('/client/edit/5');

        $response->assertStatus(200);
        $response->assertSee('Editar Cliente: 5');
    }

    public function test_show(): void
    {
        $response = $this->get('/client/show/5');

        $response->assertStatus(200);
        $response->assertSee('Detalle del cliente: 5');
    }

    public function test_new(): void
    {
        $response = $this->get('/client/new');

        $response->assertStatus(200);
        $response->assertSee('Nuevo cliente');
    }

    public function test_delete(): void
    {
        $response = $this->get('/client/delete/1/5');

        $response->assertStatus(200);
        $response->assertSee('Eliminar clientes desde el 1 hasta el 5');
    }
}
