<?php
include_once 'C:/xampp/htdocs/PHP/AddressBook/db.php';
session_start();
$mail = $_SESSION['email'];
$sql = "SELECT id FROM users WHERE Email= '$mail'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row['id'];
$sql = "SELECT * FROM contacts WHERE userId = $id";
$execute = $conn->query($sql);


if(isset($_POST['logout'])){    
  session_destroy();    
  header('Location: http://localhost/PHP/AddressBook/login.php');    
exit(); }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  body{
    background-color:rgb(184, 184, 184);
  }
</style>
  </head>

<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous">
          </script>
       
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="land.php">Address Book</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Action
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="addcontacts.php">Add Contacts</a></li>
             <!-- <li><a class="dropdown-item" href="#">View Contacts</a></li>  -->
          </ul>
        </li>
      </ul>
      <div class="d-flex">
        <!-- <button class="btn btn-outline-success" type="submit">Log Out</button> -->
        <form method='post'>
        <input type='submit' name='logout' value='Logout' class='btn btn-outline-success'>
</form>
      </div>
    </div>
  </div>
</nav>

<table class="table table-secondary table-bordered table-striped shadow-lg text-center " style="margin:100px 0 0 140px; width:80vw;">

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Occupation</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>

    <?php
        if ($execute->num_rows > 0) {
        // output data of each row
        while($row = $execute->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['contactsId']."</td>";
          echo "<td>". $row['Name']."</td>";
          echo "<td>". $row['Occupation']."</td>";
          echo "<td>". $row['Mobile']."</td>";
          echo "<td>". $row['Email']."</td>";
          echo "<td>". $row['Address']."</td>";
          echo "<td>
          <a href= 'update.php?id=".$row['contactsId']."' style='text-decoration:none;'>
          <input type='submit' name='Update' value='Update' class='btn btn-info me-1'>
          </a>|
          <a href= 'delete.php?id=".$row['contactsId']."'>
          <input type='submit' name='Delete' value='Delete' class='btn btn-warning ms-1'>
          </a>
          </td>";
          echo "</tr>";
        }
        } else {
          echo "0 results";
        }
        
?>

  


</table>

</body>
</html>