<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new A();

if(isset($_GET['route'])) $methodName =  $_GET['route'];
else $methodName = 'test';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Task 4</title>
  </head>
  <body>
    <?php
      echo $obj->f($methodName);
    ?>
  </body>
</html>
