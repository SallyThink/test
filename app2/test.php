<?php

namespace App2;

use App2\Command\ArrayStart;
use App2\Command\HtmlStart;
use App2\Format\ConcreteFormat;

require '../vendor/autoload.php';


$format = new ConcreteFormat();

$reg = new Registry();

$reg->add((new HtmlStart($format)), 'html');
$reg->add((new ArrayStart($format)), 'array');

print_r($reg->get('html', 'test'));
print_r($reg->get('array', 'test'));