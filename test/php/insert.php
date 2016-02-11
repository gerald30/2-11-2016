<?php
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../database/data.db');
    }
}


$db = new MyDB();

if(!$db){
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}

$sql =<<<EOF
      INSERT INTO users (ID,name,password)
      VALUES (1, '$name', "$password");
EOF;

$ret = $db->exec($sql);
if(!$ret){
    echo $db->lastErrorMsg();
} else {
    echo "Records created successfully\n";
}
$db->close();