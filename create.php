<?php

include 'connection.php';

if(isset($_POST['done'])){

 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $q = " INSERT INTO `employee`(`first_name`, `last_name`, `email`) VALUES ('$first_name', '$last_name', '$email')";

$query = mysqli_query($connection,$q);
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Insert</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="col-lg-6 m-auto">
 
    <form method="post">
    
        <br><br><div class="card">
        
        <div class="card-header bg-dark">
            <h1 class="text-white text-center">  Insert Operation </h1>
            </div><br>

            <label for="first_name"> First Name: </label>
            <input type="text" id="first_name" name="first_name" class="form-control"> <br>

            <label for="last_name"> Last Name: </label>
            <input type="text" id="last_name" name="last_name" class="form-control"> <br>

            <label for="email"> Email: </label>
            <input type="email" id="email" name="email" class="form-control"> <br>

            <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

        </div>
    </form>

    <button class="btn-primary btn"> <a href="index.php" class="text-white text-center"> View Employees Details </a> </button>
 </div>
</body>
</html>
