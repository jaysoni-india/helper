<?php

require_once __DIR__ . '/vendor/autoload.php';

use Helper\MyFunctions as mf;

//example of static function calling
echo mf::index();

//example of object;
$obj = new mf();

echo $obj->add(1,3);

?>
