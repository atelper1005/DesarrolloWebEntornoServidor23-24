<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class rutaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

     /**
     * Test test route.
     *
     * @return void
     */
    public function test_nomApe_curso()
    {
        $response = $this->get('/test');

        $response->assertStatus(200);
        $response->assertSee('<h1>Antonio Jesús Téllez Perdigones - 2ºDAW - Prueba</h1>');
    }

    /**
     * Test API user route.
     *
     * @return void
     */
    public function testApiUserRoute()
    {
        $response = $this->get('/api/user');

        $response->assertStatus(200);
        $response->assertSee('<h1>Peter Chen creó el Modelo Entidad Relación</h1>');
    }

    /**
     * Test user view route with ID.
     *
     * @return void
     */
    public function testUserViewRoute_Id()
    {
        $id = 123;

        $response = $this->get("/user/view/{$id}");

        $response->assertStatus(200);
        $response->assertSee("Hola número {$id}");
    }

    /**
     * Test user route with name and last name.
     *
     * @return void
     */
    public function testUserRoute_nombre_apellido()
    {
        $nombre = 'Antonio';
        $apellidos = 'Tellez Perdigones';

        $response = $this->get("/user/{$apellidos}/{$nombre}");

        $response->assertStatus(200);
        $response->assertSee("Nombre alumno: {$nombre}, Apellidos alumno: {$apellidos}");
    }

    /**
     * Test user route with last name and optional ID.
     *
     * @return void
     */
    public function test_opcional()
    {
        $apellido = 'Doe';
        $id = 123;

        $response = $this->get("/user/{$apellido}/{$id}");

        $response->assertStatus(200);
        $response->assertSee("Apellido: {$apellido} y ID: {$id}");

        $response = $this->get("/user/{$apellido}");

        $response->assertStatus(200);
        $response->assertSee("Apellido: {$apellido} y ID: ");
    }
}
