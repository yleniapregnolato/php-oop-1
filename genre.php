<?php

class Genre {
    private string $name;

    // costruttore
    public function __construct(string $name) {
        $this -> name = $name;
    }
    
    // set
    public function setName(string $name) {
        $this -> name = $name;
    }

    // get controlla il dato in uscita
    public function getName() {

        return $this-> name;
    }

}

?>