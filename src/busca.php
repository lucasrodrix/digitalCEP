<?php

require_once "vendor/autoload.php";

use Lucas\DigitalCep\Search;

$busca = new Search();
$resultado = $busca->getAddressFromZipCode('09852820');

print_r($resultado);
