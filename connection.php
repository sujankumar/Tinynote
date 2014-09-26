<?php
$conn = mysql_connect('localhost', 'root', 'jesus123');//host name mysql username and password 
if (!$conn){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('tinynote');//selecting Database
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
