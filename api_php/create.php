<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include('db.php');

if (!isset($_POST['name']) && !isset($_POST['address']) && !isset($_POST['salary'])) {
  echo json_encode("No Data Sent!");
} else {
  $name = htmlspecialchars($_POST['name']);
  $address = htmlspecialchars($_POST['address']);
  $salary = htmlspecialchars($_POST['salary']);

  $query = "INSERT INTO employees
            VALUES 
          ('', '$name', '$address', '$salary')";
  $result = mysqli_query($db, $query);

  if ($result) {
    echo json_encode("Success!");
  } else {
    echo json_encode("Failed!");
  }
}