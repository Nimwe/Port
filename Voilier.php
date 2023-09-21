<?php
// on aurait pu creer une abstract class dans 
//bateau, qui aurait crée une erreur dans voilier

Class Voilier extends Bateau implements Amarable{

    public function nbCordes(){
        return $this->masse / 10;
    }

    public function fondNecessaire(){
        return 6 ;
    }

}

?>