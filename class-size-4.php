<?php

class a {
  protected $aa = 'this is some string';
  protected $ab = ['this is some array', 1, 2, 3, 4, 5];
  protected $ac = ['this is some array', 1, 2, 3, 4, 5];
  protected $ad = ['this is some array', 1, 2, 3, 4, 5];
 
  function __construct() {
  }
}

class b {

  protected $aa = 'this is some string';
  protected $ab = ['this is some array', 1, 2, 3, 4, 5];
  protected $ac = ['this is some array', 1, 2, 3, 4, 5];
  protected $ad = ['this is some array', 1, 2, 3, 4, 5];

  function __construct($a) {
    $this->a = $a;
  }
}

class c { 

  protected $aa = 'this is some string';
  protected $ab = ['this is some array', 1, 2, 3, 4, 5];
  protected $ac = ['this is some array', 1, 2, 3, 4, 5];
  protected $ad = ['this is some array', 1, 2, 3, 4, 5];

  function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }
}

class d {

  protected $aa = 'this is some string';
  protected $ab = ['this is some array', 1, 2, 3, 4, 5];
  protected $ac = ['this is some array', 1, 2, 3, 4, 5];
  protected $ad = ['this is some array', 1, 2, 3, 4, 5];

  function __construct($a, $b, $c) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
  }
}

class e {

  protected $aa = 'this is some string';
  protected $ab = ['this is some array', 1, 2, 3, 4, 5];
  protected $ac = ['this is some array', 1, 2, 3, 4, 5];
  protected $ad = ['this is some array', 1, 2, 3, 4, 5];

  function __construct($a, $b, $c, $d) {
    $this->a = $a;
    $this->b = $b;
    $this->c = $c;
    $this->d = $d;
  }
}
