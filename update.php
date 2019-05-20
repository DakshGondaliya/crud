<?php

  include 'connection.php';

  if(isset($_POST['done'])){

  $id = $_GET['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $q = " update employee set id=$id, first_name='$first_name', last_name='$last_name', email='$email' where id=$id  ";

  $query = mysqli_query($connection,$q);

  header('location:index.php');
 }

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Update</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="col-lg-6 m-auto">
         <form method="post">
            <br><br>
            <div class="card">
               <div class="card-header bg-dark">
                  <h1 class="text-white text-center"> Update Operation </h1>
               </div>
               <br>
               <label for="first_name"> First Name: </label>
               <input type="text" id="first_name" name="first_name" class="form-control"> <br>
               <label for="last_name"> Last Name: </label>
               <input type="text" id="last_name" name="last_name" class="form-control"> <br>
               <label for="email"> Email: </label>
               <input type="email" id="email" name="email" class="form-control"> <br>
                     <button class="btn btn-success" type="submit" name="done"> Update </button>
                     <a href="index.php" class="btn btn-dark"> Cancel </a>
               <br>
            </div>
         </form>
      </div>
   </body>
</html>