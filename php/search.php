<?php
include ('nav.php');
$db = new SQLite3('../database/data');
$cName = test_input($_REQUEST['cName']);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return SQLite3::escapeString($data);
}




$admin = $db->querySingle("SELECT * FROM company WHERE companyName='$cName'", true);
if($admin == true) {

$query = "SELECT * FROM company WHERE companyName = '$cName'";
$res = $db->query($query);


echo "<h1>Company Book</h1>
<div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>Company Name</th>
        <th>Address</th>
        <th>Number </th>
        <th>CEO</th>
        <th>Email</th>
        <th>Detail</th>
      </tr>
    </thead>
     <tbody>";

while($row = $res->fetchArray()){


    $cName = $row['companyName'];
    $cAddress = $row['companyAddress'];
    $cNumber = $row['companyNumber'];
    $ceoName = $row['ceoName'];
    $cEmail = $row['companyEmail'];
    $cDetail = $row['companyDetail'];
    $categories = $row['cat'];

    echo '<tr></tr><td>'. $cName . '</td>
            <td>'. $cAddress."</td>
            <td>" . $cNumber ."</td>
            <td>" . $ceoName ."</td>
            <td>" . $cEmail ."</td>
            <td>" . $cDetail ."</td></tr>";
}
echo " </tbody></table></div>";
} else {
    echo "<h1>Not found</h1>";
     header("Refresh:3; url=client.php");
}
