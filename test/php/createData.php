<?php
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
    echo "Opened database successfully<br>";
}

$sql =<<<EOF
      CREATE TABLE users
      (ID INTEGER PRIMARY KEY   AUTOINCREMENT,
      name           TEXT    NOT NULL,
      password         TEXT     NOT NULL);
EOF;

    $ret = $db->exec($sql);
    if (!$ret) {
        echo "table already exist";
    } else {
        echo "Table created successfully ";
    }
    $db->close();


?>