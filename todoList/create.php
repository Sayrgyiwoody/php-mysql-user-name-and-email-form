<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/create+cross+new+plus+icon-1320168707626274697.png">
    
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-8">
            <h1>Create List</h1>
            <div class="card-body shadow my-3">
            <form method="post">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="userName" id="name" placeholder="Enter your name" required><br>
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="userEmail" id="email" placeholder="Enter your email" required><br>
                <button name="saveBtn" class="btn btn-primary" >Save</button>
                <h4 class="form-text"><a href="read.php">Click Here </a>to go to list page</h4>
            </form>
            </div>
           
            </div>
        </div>
    </div>
    

    <?php
    
    require_once("./db_connection.php");

    if (isset($_POST['saveBtn'])) {
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];

        $sql = "INSERT INTO todolist (name,email) VALUE ('$userName','$userEmail')";

        if (mysqli_query($connect,$sql)) {
            echo "Data transferred successfully";
        }else {
            echo "Data transferred fail.";
        }
    }
    
    ?>

</body>
</html>