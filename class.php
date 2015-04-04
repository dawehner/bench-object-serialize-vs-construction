<?php

class a {
  function __construct() {
  }
}

class b {
  function __construct($a) {
    $this->a = $a;
  }
}

class c { 
  function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }
}

class d {
  function __construct($a, $b, $c) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }
}

class e {
  function __construct($a, $b, $c, $d) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    $this->d = $d;
  }
}
