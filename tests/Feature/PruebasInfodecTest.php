<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PruebasInfodecTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Verifica que la ruta '/' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testRootRoute()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/home' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testHomeRoute()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/obtenerCiudades/{idPais}' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testObtenerCiudadesRoute()
    {
        $response = $this->get('/obtenerCiudades/1'); // Aquí asumimos un ID de país válido para el ejemplo
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/pantallaUno/store' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testPantallaUnoStoreRoute()
    {
        $response = $this->post('/pantallaUno/store');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/pantallaDos/store' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testPantallaDosStoreRoute()
    {
        $response = $this->post('/pantallaDos/store');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/pantallaTres/index' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testPantallaTresIndexRoute()
    {
        $response = $this->get('/pantallaTres/index');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/hisorial/redirigir' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testHistorialRedirigirRoute()
    {
        $response = $this->post('/hisorial/redirigir');
        $response->assertStatus(200);
    }

    /**
     * Verifica que la ruta '/lang/{lang}' devuelva un status HTTP 200.
     *
     * @return void
     */
    public function testLangSwitchRoute()
    {
        $response = $this->get('/lang/es'); // Aquí asumimos 'es' como el idioma para el ejemplo
        $response->assertStatus(200);
    }
}
