<?php

include_once('config/conf.php');

$first_name = $connect->real_escape_string($_GET['first_name']);
$last_name = $connect->real_escape_string($_GET['last_name']);

// sql query

$sql_query = "INSERT INTO info_table(first_name, last_name) VALUES ('$first_name', '$last_name')";
$select_query = "SELECT * FROM info_table WHERE first_name='$first_name' OR last_name='$last_name'";

if($statement = $connect->query($select_query))
{
    if($statement->num_rows === 1)
    {
        header('location: index.php?error=already_exists');
    }else
    {
        if($connect->query($sql_query) === true)
        {
            header('location: index.php?add=true');  
        }else
        {
            echo '<script>alert("unable to add record")</script>';
        }
    }
}

$connect->close();

?>