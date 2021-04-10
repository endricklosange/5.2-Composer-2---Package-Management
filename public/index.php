<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

require '../vendor/autoload.php';




$hello = new Hello();
$message = new SayHello();
echo $hello->talk();
echo $message->world();
