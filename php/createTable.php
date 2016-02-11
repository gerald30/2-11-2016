<?php
$db = new SQLite3('../database/data');

$db->exec('DROP TABLE IF EXISTS company');

$db->exec('CREATE TABLE company (id INTEGER PRIMARY KEY ,companyName varchar(255), companyAddress varchar(255), companyNumber integer (255), ceoName varchar(255), companyEmail VARCHAR (255), companyDetail text, cat VARCHAR (255))');
echo "Table company has been created \n";
