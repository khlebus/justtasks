<?php

class A {

  public function f($a)
  {
    if (method_exists('A', $a))
    return $this->$a();

    return $this->notFound();
  }

  public function mainFunction()
  {
    return "Success call of mainFunction";
  }

  public function test()
  {
    return "test function for empty parameter";
  }

  public function notFound()
  {
    return "error";
  }
}
