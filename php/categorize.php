<!DOCTYPE html>
<html>
<head>
    <title>Company Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myCss/nav.css">
    <script src="../js/jquery12.js"></script>
    <script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../myCss/myCss.css">
 
</head>
<body>
<style>
div.down{
    margin-top: 50px; 
}
</style>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">
                <img src="../image/logo.png" alt="logo" width="70px" height="60px">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="../html/About.html">About</a>
                </li>
                <li>
                    <a href="client.php">Services</a>
                </li>
                <li>
                    <a href="../html/contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container down">
<?php

$categories = $_REQUEST['categories'];
$db = new SQLite3('../database/data');
$query="SELECT * FROM company WHERE cat='$categories'";
$res=$db->query($query);


echo "<h1>$categories</h1>
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
?>
</div>
</body>
</html>