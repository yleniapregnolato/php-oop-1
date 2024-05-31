<?php
class Movie {
    private string $title;
    private int $year;
    private Genre $genre;

    // costruttore
    public function __construct(string $title, int $year, Genre $genre) {
        $this -> title = $title;
        $this -> year = $year;
        $this -> genre = $genre;
    }

    // titolo
    public function setTitle(string $title) {
        $this -> titolo = $title;
    }

    public function getTitle() {
       return $this -> title;
    }

    // anno
    public function setYear(int $year) {
        $this -> anno = $year;
    }

    public function getYear() {
       return $this -> year;
    }

    // genere
     public function setGenre(Genre $genre) {
        $this -> genre = $genre;
    }

    public function getGenre(): Genre {

        return $this-> genre;
    }
}

?>