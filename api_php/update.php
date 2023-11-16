<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include('db.php');

var_dump($_POST['id']);

if (!isset($_POST['id']) && (!isset($_POST['name']))  && !isset($_POST['address']) && !isset($_POST['salary'])) {
  echo json_encode("No Data Sent!");
} else {
  $id = $_POST['id'];
  $name = htmlspecialchars($_POST['name']);
  $address = htmlspecialchars($_POST['address']);
  $salary = htmlspecialchars($_POST['salary']);

  $query = "UPDATE employees SET
				name = '$name',
				address = '$address',
				salary = '$salary'
				WHERE id = $id
			";

  $result = mysqli_query($db, $query);
  if ($result) {
    echo json_encode("Success!");
  } else {
    echo json_encode("Failed!");
  }
}