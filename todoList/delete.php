  
<?php

    require_once("./db_connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM todolist WHERE  id = $id";

    if (mysqli_query($connect,$sql)) {
        header("location:read.php");
    }else {
        echo "Delete fail.." . mysql_error();
    }


?>