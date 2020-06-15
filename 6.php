<?php
function connectToMySql(){
  $ip = "127.0.0.1";
  $logbd = "root";
  $passdb = "MyNewPass";

  $link = mysqli_connect($ip, $logbd, $passdb);

  if(!$link) $link = mysqli_error();

  return $link;
}

?>

<?php
$mySqlLink = connectToMySql();

if(!$mySqlLink){
	echo "connection error: ". $mySqlLink;
	die();
}
mysqli_query ($mySqlLink, "SET CHARACTER SET 'utf8'");
mysqli_select_db($mySqlLink, "tasks");

$query = "SELECT m.*, b.* FROM model m inner join brend b on m.id_maker = b.id_maker";

$RecordSet = mysqli_query($mySqlLink, $query);

$results = array();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Task 6</title>
  </head>
  <body>
    <table>
    <thead>
      <tr>
    <?php
      while ($result = mysqli_fetch_field($RecordSet)){
        echo "<td>" . $result->name . "</td>";
        array_push($results, $result->name);
      }
    ?>
      </tr>
    </thead>
    <tbody>
    <?php
      while ($row = mysqli_fetch_array($RecordSet)){
        echo "<tr>";
          foreach($results as $item){
            echo "<td>" . $row[$item] . "</td>";
          }
        echo "</tr>";
      }
    ?>
    </tbody>
    </table>
  </body>
</html>
<?php
mysqli_free_result($RecordSet);
