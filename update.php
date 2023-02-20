<?php
session_start();
include_once 'C:/xampp/htdocs/PHP/AddressBook/db.php';

if(isset($_GET['id'])) 
{
$id = $_GET['id'];
$sql = "SELECT  Name, Occupation, Mobile, Email, Address FROM contacts WHERE contactsId = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}

if(isset($_POST['Update'])){
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql1 = "UPDATE contacts SET Name= '$name', Occupation= '$occupation', Mobile = '$mobile' , Email = '$email', Address = '$address' WHERE contactsId = $id ";
    if($conn->query($sql1)){
        
        header("Location: http://localhost/PHP/AddressBook/viewcontacts.php");
        exit;
    }
}
if (isset($_POST['Cancel'])){
    header('Location:viewcontacts.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
    background-color: rgb(177, 10, 249);
  }
    .cont{
        width:400px;
        height:600px;
        margin-left:560px;
        margin-top:50px;
        padding:0 10px 0 10px;
        border: 1px solid gray;
        border-radius:5px;
        background-color:rgb(202, 91, 249);
        color:white;
    }
  .btnn{
    background-color: rgb(177, 10, 249);
    color:white;
        width:7vw;
        height: 37px;
        /* margin-left:130px; */
        border:1px solid black;
        border-radius:8px;
  }
    </style>
</head>
<body>
<div class="cont shadow-lg p-3">
    <h3 class="text-center ">Update Contact</h3>
    <form  method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" name="name" value=<?php echo $row['Name']?>>
    </div>
    <div class="mb-3">
        <label for="occupation" class="form-label">Occupation </label>
        <input type="text" class="form-control" name="occupation" value=<?php echo $row['Occupation']?> >
    </div>
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile </label>
        <input type="text" class="form-control" name="mobile"  value=<?php echo $row['Mobile']?>>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" value=<?php echo $row['Email']?>>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3"><?php echo $row['Address']?> </textarea>
    </div>
    <div class="d-flex flex-sm-row "style="margin-left:71px;">
        <input type="submit" name="Update" value="Update" class="btnn me-1 mt-1" style="">
        <input type="submit" name="Cancel" value="Cancel" class="btnn ms-1 mt-1" style="">
    </div>
    </form>
  </div>
</body>
</html>