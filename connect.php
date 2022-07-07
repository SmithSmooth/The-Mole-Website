<?php
include ("variables.php");

 $orgName=$_POST['OrgName'];
 $adminName=$_POST['AdminName'];
 $orgEmail=$_POST['OrgEmail'];
 $uniqueCode=$_POST['OrgCode'];
 $orgType=$_POST['TypeOfOrg'];
 $orgPassword=$_POST['OrgPassword'];
 
 // Database connection
 $conn= new mysqli($localhost,$username,'',$databaseName1);
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 }else{
     $stmt= $conn->prepare("insert into organisations(OrganisationName, AdminName, OrganisationEmail, Uniquecode, 
     TypeofOrganisation, Organisationpassword) values(?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssss",$orgName, $adminName, $orgEmail, $uniqueCode, $orgType, $orgPassword);
     $stmt->execute();
     echo "Your organisation has been successful registered ....";
     $stmt->close();
     $conn->close();
     
     header("Location: login.html");
     
 }

?>