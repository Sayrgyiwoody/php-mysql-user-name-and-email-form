<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>

    <?php

    //Get data => show => edit => update

    require_once("db_connection.php");

    $deleteId = $_GET['id'];

    $sql = "SELECT * FROM todolist WHERE id =$deleteId";

    $query = mysqli_query($connect,$sql); 

    $data = mysqli_fetch_assoc($query); //get data step

    //update data step
    if(isset($_POST['updateBtn'])) {
        $newName = $_POST['newName'];
        $taskId = $_POST['taskId'];
        $newEmail = $_POST['newEmail'];
        // $id = $_GET['taskId'];
            $updateSql = "UPDATE todolist SET name='$newName',email='$newEmail' WHERE id=$taskId";

            if (mysqli_query($connect,$updateSql)) {
                header("location:read.php");
            }else {
                echo "<small class='text-danger'>Data update fail.</small>";
            }
         }

    ?>
    
    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
            <div class="card-body shadow">
            <form method="POST">
                <h3 class="mb-3">Tasks<i class="fa-solid fa-list-check float-end"></i></h3>
                <input name="taskId" type="hidden" class="form-control-lg mb-2 w-100" value="<?php echo $data['id'] ?>" required><!--Show Data Step-->
                <label class="form-label" for="newName">Name</label><!--SHOW NAME-->
                <input name="newName" type="text" class="form-control-lg w-100" value="<?php echo $data['name'] ?>" required><!--Show Data Step-->
                <label class="form-label" for="newName">Email</label><!--show email-->
                <input name="newEmail" type="text" class="form-control-lg w-100" value="<?php echo $data['email'] ?>" required>
                <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-secondary mt-3" name="updateBtn">Update</button>
                <h4 class="form-text"><a href="read.php">Click Here </a>to go back to list page</h4>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>