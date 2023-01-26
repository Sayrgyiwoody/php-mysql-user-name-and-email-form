<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/3068/3068380.png">
    <style>
        * {
            font-family:monospace;
            font-size:20px;
        }
    </style>
<body>

    
            <!-- <tr>
                <td>Waiyan</td>
                <td>waiyan@gmail.com</td>
                <td>1</td>
                <td>3:00 pm</td>
            </tr> -->
        <h1>Lists</h1>

        <?php

        echo "<table class='table'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>";

        require_once("./db_connection.php");

        $sql = "SELECT * FROM todolist ";
        $query = mysqli_query($connect,$sql);
        $totalRow = mysqli_num_rows($query);
        while ($row = mysqli_fetch_assoc($query)) {
            $time = date('d-M-Y g:i a',strtotime($row['created_at']));
            echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>$time</td>
            <th>
            <a href='./update.php?id={$row["id"]}'>Update</a> |
            <a href='./delete.php?id={$row["id"]}'>Delete</a>
            </th>
        </tr>";
        }
        echo "</tbody>
        </table>";
        ?>

    <h4 class="form-text"><a href="create.php">Click Here </a>to go back to create page</h4>

</body>
</html>