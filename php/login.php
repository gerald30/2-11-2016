<?php
session_start();

$_SESSION['name'] = test_input($_REQUEST['name']);
$_SESSION['password'] = md5($_REQUEST['password']);
$db = new SQLite3('../database/data');
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}

if($_SESSION['name'] && $_SESSION['password']){

    $name = $_SESSION['name'];
    $password = $_SESSION['password'];
    $admin = $db->querySingle("SELECT * FROM users WHERE name='$name'", true);
    if($admin == true) {
        $query = "SELECT * FROM users WHERE name = '$name'";
        $res = $db->query($query);
        while($row=$res->fetchArray()){
            $dbname = $row['name'];
            $dbpassword = $row['password'];
            $dbadmin =$row['admin'];
        }
        if($name==$dbname){
            if($password == $dbpassword ){
                if($dbadmin == "yes") {
                    header("location: admin.php");
                } else {
                    header("location: client.php");
                }
            } else {
                session_destroy();
                include ('unregisteredNav.php');
                echo "<h2>Your password is incorrect</h2>";
                header("Refresh:2; url=../index.html");
            }
        } else {
            session_destroy();
            include ('unregisteredNav.php');
            echo "<h2>Wrong username!</h2>";
            header("Refresh:2; url=../index.html");
        }
    } else {
        session_destroy();
        include ('unregisteredNav.php');
        echo "<h1>This name: $name is not registered!<h1>";
        header("Refresh:2; url=../index.html");
    }

} else {

    session_destroy();
    include ('unregisteredNav.php');
    echo "you have to type a password";
    header("Refresh:2; url=../index.html");
}