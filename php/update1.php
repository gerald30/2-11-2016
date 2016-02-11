<?php
include ('nav.php');
$id = $_REQUEST['id'];
$cName = $_REQUEST['cName'];
$cAddress = $_REQUEST['cAddress'];
$cNumber = $_REQUEST['cNumber'];
$ceoName = $_REQUEST['ceoName'];
$cEmail = $_REQUEST['cEmail'];
$cDetail = $_REQUEST['cDetail'];
$categories = $_REQUEST['categories'];
$db = new SQLite3('../database/data');

$db->exec("UPDATE 'company' SET 'companyName' = '$cName',
                                'companyAddress' = '$cAddress',
                                'companyNumber' = '$cNumber',
                                'ceoName' = '$ceoName',
                                'companyEmail' = '$cEmail',
                                'companyDetail' = '$cDetail',
                                'cat' = '$categories'
                                WHERE id = $id ");

echo "<h1>Data has been updated!</h1>";
header("Refresh:3; url=admin.php");