<?php
//attach the source database file to the bulkload connection object;
$bulkload_connection = new SQLite3("c:/sqlite3_database_files/source.db");

//retrieve the create statement query for the source table;
$sourcetbl_create_statement = $bulkload_connection->querySingle("select sql from sqlite_master where type='table' and name='my_template'");
if ($sourcetbl_create_statement===false) exit($bulkload_connection->lastErrorMsg());

//build the create statement query for the target table;
$targettbl_create_statement = str_replace('CREATE TABLE my_template', 'CREATE TABLE bulkload.working_table', $sourcetbl_create_statement);

//attach the target database file to the bulkload connection object - and reference it as the database called [bulkload];
$result=$bulkload_connection->exec("attach 'c:/sqlite3_database_files/target.db' as bulkload");
if ($result===false) exit($bulkload_connection->lastErrorMsg());

//issue the query to create the target table within the target database file;
$result=$bulkload_connection->exec($targettbl_create_statement);
if ($result===false) exit($bulkload_connection->lastErrorMsg());

//copy the rows from the source table to the target table as quickly as possible;
$result=$bulkload_connection->exec("insert into bulkload.working_table select * from my_template");
if ($result===false) exit($bulkload_connection->lastErrorMsg());

//release the OS file locks on the attached database files;
$bulkload_connection->close();
unset($bulkload_connection);