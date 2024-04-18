<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloWorldControllerTest extends TestCase
{
    /** @test */
    public function it_returns_hello_world()
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);  // Verifica se a resposta é 200 OK
        $response->assertJson(['message' => 'Hello World']);  // Verifica se o JSON retornado contém a chave e valor esperados
    }
}
