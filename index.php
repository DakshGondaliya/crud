<!DOCTYPE html>
<html lang="en">
<head>
 <title>Display</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>
  <button class="btn-primary btn" id="addEmployee"> <a href="create.php" class="text-white"> Add Employee </a>  </button>

  <div class="container">
   <div class="col-lg-12">
    <br><br>
    <h1 class="text-warning text-center" > Employees Details </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
    
    <tr class="bg-dark text-white text-center">
    
    <th> Id </th>
    <th> First Name </th>
    <th> Last Name </th>
    <th> Email </th>
    <th> Read </th>
    <th> Delete </th>
    <th> Update </th>

    </tr >

    <?php

    include 'connection.php'; 
    $q = "select * from employee ";

    $query = mysqli_query($connection,$q);

    while($res = mysqli_fetch_array($query)){
    ?>
    <tr class="text-center">
    <td> <?php echo $res['id'];  ?> </td>
    <td> <?php echo $res['first_name'];  ?> </td>
    <td> <?php echo $res['last_name'];  ?> </td>
    <td> <?php echo $res['email'];  ?> </td>
    <td> <button class="btn-success btn"> <a href="read.php?id=<?php echo $res['id']; ?>" class="text-white"> Read </a>  </button> </td>
    <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
    <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

    </tr>

    <?php 
    }
    ?>
    
    </table>  

  </div>
 </div>

  <!-- <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script> -->

</body>
</html>