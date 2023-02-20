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
    background-color: rgb(26, 238, 164);
  }
    .cont{
        width:400px;
        height:600px;
        margin-left:560px;
        margin-top:50px;
        padding:0 10px 0 10px;
        border: 1px solid gray;
        border-radius:5px;
        background-color:rgb(133, 234, 199);
        color:black;
    }
  .btnn{
    background-color: rgb(26, 238, 164);
    color:black;
        width:7vw;
        height: 37px;
        margin-left:130px;
        border:1px solid black;
        border-radius:8px;
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
            <!-- <li><a class="dropdown-item" href="addcontacts.php">Add Contacts</a></li> -->
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
  <div class="cont shadow-lg p-3">
    <h3 class="text-center ">New Contact</h3>
    <form action="insertcontact.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" name="name" id="name" placeholder="">
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation </label>
        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="">
    </div>
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile </label>
        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" id="email" placeholder="">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
    </div>
    <input type="submit" name="submit" value="Submit" class="btnn" style="">
    </form>
  </div>
</body>
</html>