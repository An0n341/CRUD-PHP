<?php

include_once('config/conf.php');

$sql_query = 'SELECT * FROM info_table';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>CRUD</title>
</head>

<body>

    <!--Container-->
    <div class="container_crud">
        <!--Form add record-->
        <div class="container_add__form">
            <button class="btn btn-primary btn_add" style="margin: 10px;">Add Record</button>
            <form action="create.php" method="GET" class="form_add"style="margin: 10px;">
                <input type="text" name="first_name" placeholder="Fist name" input->
                <input type="text" name="last_name" placeholder="Last name">
                <input type="submit" value="Add" name="submit_add" class="btn btn-success">
            </form>
        </div>
        <!--Table-->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Fist Name</th>
                    <th>Last Name</th>
                    <th>Settings</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once('read.php');
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>