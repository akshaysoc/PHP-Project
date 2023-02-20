<?php
include_once 'C:/xampp/htdocs/PHP/AddressBook/db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE  FROM contacts WHERE contactsId = $id";
    if($conn->query($sql)){
        // echo 'Success';
        header("Location: http://localhost/PHP/AddressBook/viewcontacts.php");
    }
}
?>