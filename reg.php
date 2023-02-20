<?php
include_once 'db.php';
$name_error = "";
$email_error = "";

$mobile_error = "";
$password_error = "";
$address_error = "";

$is_valid = true;
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $mobile = $_POST['mobile'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     if (!preg_match('/^[\p{L} ]+$/u', $name)) {
      $name_error = "Name must contain only letters";
      $is_valid = false;
    }
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
      $is_valid = false;
    }
    
    else {
      // check if email already exists in database
      $sql = "SELECT * FROM users WHERE Email='$email'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $email_error = "email already exists";
        $is_valid = false;
        echo '<script>alert("emailId already exists ")</script>';
        
      }
      
    }
  
  
    if (!preg_match("/^[7-9][0-9]{9}$/", $mobile)) {
      $mobile_error = "Mobile must start with 7, 8 or 9 and contain 10 digits";
      $is_valid = false;
    }
  
    if (!preg_match("/^(?=.*[A-Z])(?=.*[!@#$%^&*()_+=-])(?=.*[0-9]).{8,}$/", $password)) {
      $password_error = "Password must contain at least one upper-case letter, one special character and a minimum of 8 characters";
      $is_valid = false;
    }
  
    if (empty($address)) {
      $address_error = "Address can't be empty";
      $is_valid = false;
    }

    if ($is_valid) {
     $sql = "INSERT INTO users (name,mobile,email,password)
     VALUES ('$name','$mobile','$email','$password')";
     if ($conn->query($sql)) {
      //   echo "New record has been added successfully !";
        header("Location: http://localhost/PHP/AddressBook/login.php");
     } else {
        echo "Error: " . $sql . ":-" . $conn->error;
     }
     
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    body{
        background-color:rgb(17, 128, 240);
    }
    .contain{
        width:400px;
        min-height:600px;
        margin:15vh 0 40px 37vw;
        background-color:rgb(125, 190, 255);
        color:white;
        border-radius:5px;
        border:1px solid black;
    }
    .con{
        padding:0 0  0 10px;
    }
    .form-control{
        width:350px;
    }
    .btn{
        background-color:rgb(17, 128, 240); 
        color:white;
        width:7vw;
        margin-left:120px;
        border:1px solid black;
    }
</style>
</head>
<body>
    <div class='contain col-lg-5  shadow-lg p-3'>
    <form  method="post">
       
            
            <h2 class="text-center">Address Book Registration</h2>
            <div class="con">
                <div class="mb-1">
                    <label for="name" class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="name" name="name" value="" required>
                        <span class="error"><?php echo $name_error; ?></span>
                    </div>
                </div>
                <div class="mb-1 ">
                    <label for="mobile" class="col-sm-2 col-form-label">Mobile:</label>
                    <div class="col-sm-10">
                        <input type="number"  class="form-control" id="mobile" name="mobile" value="" required>
                        <span class="error"><?php echo $mobile_error; ?></span>
                    </div>
                </div>
                <div class="mb-1  ">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="email" name="email" value="" required>
                        <span class="error"><?php echo $email_error; ?></span>
                    </div>
                </div>
                <div class="mb-4  ">
                    <label for="password" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" required>
                        <span class="error"><?php echo $password_error; ?></span>
                    </div>
                    </div>
                <input type="submit" name="submit" value="Register" class="btn" >
</div>
        
    </form>
    </div>
</body>
</html>

