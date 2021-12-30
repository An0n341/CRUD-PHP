<?php

include_once('config/conf.php');

$first_name = $connect->real_escape_string($_GET['new_first_name']);
$last_name = $connect->real_escape_string(($_GET['new_last_name']));
$id = $_GET['id'];

$sql_query = "UPDATE info_table SET first_name='$first_name', last_name='$last_name' WHERE id='$id'";

if(empty($first_name) || empty($last_name))
{
    header('location: index.php');
}else
{
    if($connect->query($sql_query) === true)
    {
        header('location: index.php');
    }
}

$connect->close();

?>