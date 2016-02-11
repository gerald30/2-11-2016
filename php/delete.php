<?php
$cName = $_REQUEST['cName'];
$db = new SQLite3('../database/data');



$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);
if($admin == true) {
    include ('unregisteredNav.php');
$db->exec("DELETE FROM company WHERE companyName='$cName'");

echo "<h1>Row deleted! ".$cName." has been deleted</h1>";
header("Refresh:3; url=admin.php");

} else {
    include ('unregisteredNav.php');
    echo "<h1>Not found</h1>";
    header("Refresh:3; url=admin.php");
}