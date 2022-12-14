<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_inicio()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_basic_test()
    {
        $this->assertTrue(true);
    }

    public function test_contacto()
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
        $response->assertSeeText(['Nombre', 'Correo', 'Comentario']);
    }
    //assert see text -> revisa los textos de la pagina, que estén
}
