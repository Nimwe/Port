<?php

Class Fregate extends Bateau implements Amarable {

    public function nbCordes(){
        return $this->masse / 10;
    }

    public function fondNecessaire(){
        return 12 ;
    }

}



?>