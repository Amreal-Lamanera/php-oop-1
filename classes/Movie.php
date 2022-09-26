<?php

include_once __DIR__ . '/Actor.php';

class Movie
{
    public $name;
    public $genres;
    public $year;
    public $cast = [];
    public $img;

    function __construct($name, $img, $genres = null, $year = null, $cast = [])
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

    public function addActor()
    {
        $args = func_get_args();
        foreach ($args as $actor) {
            if ($actor instanceof Actor) {
                $fullname = $actor->getFullname();
                if (!in_array($fullname, $this->cast) || $this->cast == null)
                    $this->cast[] = $fullname;
            }
        }
    }

    public function removeActor($actor)
    {
        $args = func_get_args();
        foreach ($args as $actor) {
            if ($actor instanceof Actor) {
                $fullname = $actor->getFullname();
                if (in_array($fullname, $this->cast)) {
                    $key = array_search($fullname, $this->cast);
                    array_splice($this->cast, $key, 1);
                }
            }
        }
    }
}
