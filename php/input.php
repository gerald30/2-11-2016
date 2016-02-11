<?php
include ('nav.php');
$cName = test_input($_REQUEST['cName']);
$cAddress = test_input($_REQUEST['cAddress']);
$cNumber = test_input($_REQUEST['cNumber']);
$ceoName = test_input($_REQUEST['ceoName']);
$cEmail = test_input($_REQUEST['cEmail']);
$cDetail = test_input($_REQUEST['cDetail']);
$categories = test_input($_REQUEST['categories']);
$db = new SQLite3('../database/data');

//cleaning input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}

$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);

if($admin == true) {
    header("Refresh:3; url=client.php");
    die("<h2>Company Name : $cName is already exist please type another name</h2>");
} else {

    $db->exec("INSERT INTO company (companyName , companyAddress, companyNumber, ceoName, companyEmail, companyDetail, cat) VALUES ('$cName', '$cAddress', '$cNumber','$ceoName','$cEmail','$cDetail','$categories')");
    echo "<h1>Your Company has been registered!</h1>";
    header("Refresh:3; url=client.php");
}






