<?php

use PHPUnit\Framework\TestCase;
use App\Entities\ConseillerVoyage;
use App\Entities\Voyage;

class VoyageTest extends TestCase{

    public function testPartirSiSoleil(){

    $mockMeteo = $this->creatMock(ServiceMeteo::class);

    $mockMeteo->method('getTemps')
              ->willReturn('Soleil');

    $conseiller = new ConseillerVoyage($mockMeteo);
    $resultat = $conseiller->peutOnPartir("");

    $this->assertEqual;
    }
}