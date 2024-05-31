<?php

class Genre {
    private string $genre;

    // costruttore
    public function __construct(string $genre) {
        $this -> genere = $genre;
    }
    
    // set
    public function setGenre(string $genre) {
        $this -> genere = $genre;
    }

    // get controlla il dato in uscita
    public function getGenre() {

        return $this-> genre;
    }

}

?>