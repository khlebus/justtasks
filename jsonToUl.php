<?php

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);

arrayToList($data);

function arrayToList($in) {
  echo "<ul>";
  foreach($in as $v) {
    if( is_array($v)) arrayToList($v);
    else echo '<li>' . $v . '</li>';
  }
  echo "</ul>";
}

die;
