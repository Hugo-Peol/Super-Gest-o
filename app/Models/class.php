
<?php

class stdClass {
    //
}

$classe = new stdClass;

$array = ['hugo'];

$classe->lista = $array;

var_dump($classe->lista);