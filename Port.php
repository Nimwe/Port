<?php

class Port {
    public $nomPort;

    public function __construct(string $np) {
        $this->nomPort = $np;
        echo "Ici c'est" .$np . "! <br>" ;
    }

    public function accueilEngin(amarable $a){
        if ($a->fondNecessaire() >10) {
            echo " Ca va toucher ! " ;
        }else {
        echo "Ca passe, il faut " . $a->nbCordes() . " bites d'amarrage. <br>";
    }
}

    
}

?>