<?php

$name = $_POST['name'];
$job = $_POST['job'];
$password = $_POST['password'];
$categories = $_POST['categories'];
$db = new SQLite3('mydb');




$db->exec("INSERT INTO users (name, job, password, cat) VALUES ('$name', '$job', '$password','$categories')");
echo "1 Row inserted ";


//Get single row from people table
echo "Get single row from people table \n";
$admin = $db->querySingle('SELECT * FROM users WHERE name="$name"', true);
var_dump($admin);
