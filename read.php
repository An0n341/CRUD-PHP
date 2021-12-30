<?php

if($cn = $connect->query($sql_query))
{
    if($cn->num_rows > 0)
    {
        while($row = $cn->fetch_array(MYSQLI_ASSOC))
        {
            echo '
                <tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['first_name'] . '</td>
                    <td>' . $row['last_name'] . '</td>

                    <!--Button Settings-->
                    
                    <td class="td_settings">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Update
                            </button>
                            <ul class="dropdown-menu">
                                <li update-list="form_get">
                                    <form action="update.php" method="GET">
                                        <input type="text" name="new_first_name" placeholder="New Fist Name">
                                        <input type="text" name="new_last_name" placeholder="New Last Name">
                                        <input type="hidden" name="id" value="' . $row['id'] . '">
                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <form action="delete.php" method="GET">
                            <input type="hidden" name="id_delete" value="' . $row['id'] . '">
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            ';
        }
    }
}

$connect->close();

?>