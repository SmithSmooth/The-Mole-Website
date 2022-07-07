<?php 
include ("variables.php");


$nameOfSender=$_POST["nameOfSender"];
$emailOfSender=$_POST["emailOfSender"];
$message=$_POST["message"];

// Database connection
$conn= new mysqli($localhost,$username,'',$databaseName1);
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into messages(NameOfSender,EmailOfSender,messageSent) values(?, ?, ?)");
    $stmt->bind_param("sss",$nameOfSender,$emailOfSender,$message);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    header("Location: main.html");
    
}



?>