<?php

class Movie
{
    public $name;
    public $genres;
    public $year;
    public $cast;
    public $img;

    function __construct($name, $img, $genres = null, $year = null, $cast = null)
    {
        $this->name = $name;
        $this->genres = $genres;
        $this->setYear($year);
        $this->cast = $cast;
        $this->setImg($img);
    }

    public function setYear($year)
    {
        if (is_int($year) && $year > 1900)
            $this->year = $year;
    }

    public function setImg($img)
    {
        if (filter_var($img, FILTER_VALIDATE_URL) || is_file($img))
            $this->img = $img;
    }
}
