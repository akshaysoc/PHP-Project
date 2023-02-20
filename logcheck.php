<?php
session_start();
include_once 'C:/xampp/htdocs/PHP/AddressBook/db.php';

if(isset($_POST['submit']))
{ $email = $_POST['email'];
$password = $_POST['password'];
 $sql = "SELECT id,name FROM users WHERE email ='$email' AND password = '$password' ";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 if($row)
{ 
    // echo 'Success';
    $_SESSION["email"]=$email;
    header("Location: http://localhost/PHP/AddressBook/land.php");

 }
else{ header("Location: http://localhost/PHP/AddressBook/reg.php");
 exit;
}}

if (isset($_POST['reg'])){
    header('Location:reg.php');
    exit;
}

?>