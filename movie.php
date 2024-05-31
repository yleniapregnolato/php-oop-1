<?php
class Movie {
    private string $title;
    private int $year;
    private Genre $genre;

    // costruttore
    public function __construct(string $title, int $year, Genre $genre) {
        $this -> titolo = $title;
        $this -> anno = $year;
        $this -> genere = $genre;
    }

    // titolo
    public function setTitle(string $title) {
        $this -> titolo = $title;
    }

    public function getTitle(string $titolo) {
       return $this -> title;
    }

    // anno
    public function setYear(int $year) {
        $this -> anno = $year;
    }

    public function getYear(int $year) {
       return $this -> year
    }
}
?>