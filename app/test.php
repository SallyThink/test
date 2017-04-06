<?php

require '../vendor/autoload.php';

$html = new \App\Contracts\HtmlContract();
$array = new \App\Contracts\ArrayContract();

$start1 = new \App\Command\Start($html);
$start2 = new \App\Command\Start($array);

var_dump($start1->get('test'));
var_dump($start2->get('test'));