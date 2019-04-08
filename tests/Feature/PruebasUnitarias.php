<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DuskTestCase.php;

class PruebasUnitarias extends DuskTestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
         $browser->type('matricula', '8745')
                 ->type('fecha', '2019-04-15')
                 ->type('hora', '06:45');
                 ->press('Enviar');
                 ->assertSee('El coche si puede transitar en la carretera');
        });
    }
}
