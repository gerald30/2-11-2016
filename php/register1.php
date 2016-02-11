


<?php
include ('unregisteredNav.php');
$name = test_input($_REQUEST['name']);
$email = test_input($_REQUEST['email']);
$password = md5($_REQUEST['password']);
$db = new SQLite3('../database/data');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}

$admin = $db->querySingle("SELECT * FROM users WHERE name='$name'", true);

if($admin == true) {
    header("Refresh:3; url=register.php");
    die("<h2>Name : $name is already exist please type another name</h2>");

} else {
    session_start();
    $_SESSION['name'] = $name;
    $db->exec("INSERT INTO users (name , email, password) VALUES ('$name', '$email','$password')");
    echo "<h1>You have been successfully registered!</h1>";
    header("Refresh:3; url=client.php");
}