<?php
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
    background-color:rgb(238, 234, 26);
  }
  .box{
    width:600px;
    height:200px;
    margin:20vh 0 0 30vw;
    padding:1vw;
    border-radius:5px;
    background-color: rgb(237, 235, 137);
    border:1px solid black;
  }
  .btnn{
        background-color:rgb(238, 234, 26); 
        color:black;
        height:38px;
        width:10vw;
        margin-left:190px;
        border:1px solid black;
        border-radius:5px;
        
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
    <a class="navbar-brand" href="#">Address Book</a>
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
            <li><a class="dropdown-item" href="viewcontacts.php">View Contacts</a></li>
          </ul>
        </li>
      </ul>
      <div class="d-flex">
      <form method='post'>
        <input type='submit' name='logout' value='Logout' class='btn btn-outline-success'>
</form>
</div>
    </div>
  </div>
</nav>
<div class="box shadow-lg">
<h1 class="text-center mt-5">Welcome to Address Book</h1>
<a href="addcontacts.php"><input type="submit" name="submit" value="Add New Contacts" class="btnn mt-3" style=""></a>
</div>
</body>
</html>