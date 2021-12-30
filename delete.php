<?php

include_once('config/conf.php');

$id = $_GET['id_delete'];

$sql_query = "DELETE FROM info_table WHERE id='$id'";

if($connect->query($sql_query) === true)
{
    header("location: index.php?delete='$id'");
}else
{
    header('location: index.php?delete=false');
}

?>