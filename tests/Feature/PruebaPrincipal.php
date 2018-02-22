<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PruebaPrincipal extends TestCase
{
    /**
     * A basic test example.
     *
     * @return si funciona bien si sale 404 no xiste esa ruta
     */
	function test_Principal_Menu(){
    	$this->get('/')
        ->assertStatus(200);
    }
}
