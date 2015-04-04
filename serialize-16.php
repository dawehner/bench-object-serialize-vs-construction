<?php

include "class-size-16.php";

$a = new a();
$b = new b($a);
$c = new c($a, $b);
$d = new d($a, $b, $c);
$e = new e($a, $b, $c, $d);

print serialize($e);
