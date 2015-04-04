<?php

include "class.php";

$s = 'O:1:"e":4:{s:1:"a";O:1:"a":0:{}s:1:"b";O:1:"b":1:{s:1:"a";r:2;}s:1:"c";O:1:"c":2:{s:1:"a";r:2;s:1:"b";r:3;}s:1:"d";O:1:"d":3:{s:1:"a";r:2;s:1:"b";r:3;s:1:"c";r:5;}}';

$start = microtime();

for ($i = 0; $i < 1000; $i++) {
  $e = unserialize($s);
}

$end = microtime();

print ($end - $start) . "\n";
