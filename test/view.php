<?php
//all db
$db = new SQLite3('myDB');
echo 'Result:<br>';
$query="SELECT * FROM `users`";
$queryB="SELECT * FROM users WHERE job='programmer'";
$resB=$db->query($queryB);


$res=$db->query($query);
while($row=$res->fetchArray()){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['job'];
    echo '	' . $name . ' : ' . $email . '<br>';
  }