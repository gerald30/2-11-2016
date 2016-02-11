


<?php
$db = new SQLite3('mydb');

$db->exec('DROP TABLE IF EXISTS users');

$db->exec('CREATE TABLE users (id INTEGER PRIMARY KEY , name varchar(255) , job varchar(255) , password varchar (255) , cat varchar (255))');
echo "Table people has been created \n";
