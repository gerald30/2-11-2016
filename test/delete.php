<?php

$name = $_REQUEST['name'];
$db = new SQLite3('myDB');

$db->exec("DELETE FROM users WHERE name='$name'");
echo "Row deleted \n";