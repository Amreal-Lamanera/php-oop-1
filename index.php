<?php

include_once __DIR__ . '/Movie.php';


$LOTR = new Movie('The Lord of the Rings', './download.jfif', ['fantasy', 'action']);

var_dump($LOTR);

$harry_potter = new Movie('Harry Potter', 'https://i.ebayimg.com/images/g/9TkAAOSwtJZXVZP~/s-l400.jpg');

var_dump($harry_potter);
