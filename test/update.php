<?php
$db = new SQLite3('mydb');
//Update Row

$do=$db->exec("UPDATE `users` SET `name`='Stephen Hawking', `email`='hawking@example.com' WHERE `id`=2");
Alert('UPDATE',$do);
unset($do);

//Fetch Array update #1
echo 'Result (update #1):<br>';
$query="SELECT * FROM `users`";
$res=$db->query($query);
while($row=$res->fetchArray()){
    $id=$row['id'];
    $name=$row['name'];
    $email=$row['email'];
    echo '	' . $name . ' : ' . $email . '<br>';
}

echo '<br>';