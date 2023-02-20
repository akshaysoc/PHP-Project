<?php
session_start();
$mail = $_SESSION['email'];
include_once 'C:/xampp/htdocs/PHP/AddressBook/db.php';
$sql1 = "SELECT id FROM users WHERE Email = '$mail'";
$result = $conn->query($sql1);
$row = $result->fetch_assoc();


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $userId = $row['id'];
   
   

   

    $sql = "INSERT INTO contacts (userId,Name,Occupation,Mobile,Email,Address) VALUES ('$userId','$name','$occupation','$mobile','$email','$address')";
     if($conn->query($sql) === TRUE){
        // echo "success";
        header("Location: http://localhost/PHP/AddressBook/land.php");
     }
     else{
      echo "Error: " . $sql . ":-" . $conn->error;
     }
 
  
     
}
?>