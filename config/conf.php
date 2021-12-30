<?php

$host = '127.0.0.1';
$hostname = 'root';
$password = '';
$db_name = 'crud_db';

$connect = new mysqli($host, $hostname, $password, $db_name);

if($connect === false)
{
    die('<script>alert("error whit connect database")</script>');
}

?>