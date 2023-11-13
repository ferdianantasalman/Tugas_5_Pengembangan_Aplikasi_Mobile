<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include('db.php');

$result = mysqli_query($db, "SELECT * FROM employees");

if ($result) {
  $rows = array();
  while ($data = mysqli_fetch_assoc($result)) {
    $rows[] = $data;
  }
  print json_encode($rows);
}