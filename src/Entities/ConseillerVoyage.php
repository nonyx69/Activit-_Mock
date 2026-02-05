<?php

namespace App\Entities;

class ConseillerVoyage{

    private $serviceMeteo;

    public function __contruct($serviceMeteo){
        $this->serviceMeteo = $serviceMeteo;
    }
    
    public function peutOnPartir($ville){
        $meteo = $this->serviceMeteo->getTemps($ville);
        
        if($meteo == "Soleil"){
            return "Bon Voyage";
        }
        return "Restez a la maison";
    }
}