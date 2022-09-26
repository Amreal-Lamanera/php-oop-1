<?php

class Actor
{
    public $name;
    public $lastname;
    public $birthdate;

    function __construct($name, $lastname, $birthdate = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
    }

    public function getFullname()
    {
        return "$this->name $this->lastname";
    }
}
