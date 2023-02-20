<?php

$servername = "localhost";
$username = "root";
$password = "Akshay@3100";
$db = "addressbook";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error);}
//Create database
// $sql = "CREATE DATABASE addressbook";

// if ($conn->query($sql) === TRUE)
//     { echo "Database created successfully";} 
// else  
//     { echo "Error creating database: " . $conn->error;}

    //sql to create table
// $sql1 = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(30) NOT NULL,
//     Email VARCHAR(50),
//     Mobile VARCHAR(10),
//     Password VARCHAR(100)
// )";
//      if ($conn->query($sql1) === TRUE) 
//      { echo "Table MyGuests created successfully"; } 
//      else
//       { echo "Error creating table: " . $conn->error;}

// $sql1 = "CREATE TABLE contacts (
//     contactsId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     userId INT(6) UNSIGNED NOT NULL,
//     Name VARCHAR(50) NOT NULL,
//     Occupation VARCHAR(20) NOT NULL,
//     Mobile INT(10) NOT NULL,
//     Email VARCHAR(50) NOT NULL,
//     Address VARCHAR(100) NOT NULL,
//     FOREIGN KEY (userId) REFERENCES users(id)
 
// )";
  
//   if ($conn->query($sql1) === TRUE) {
//     echo "Table contacts created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
?>