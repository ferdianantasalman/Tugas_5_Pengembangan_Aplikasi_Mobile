<?php
$db = mysqli_connect('localhost', 'root', '', 'pertemuan_5');

if (!$db) {
  echo "Database connection failed!";
}