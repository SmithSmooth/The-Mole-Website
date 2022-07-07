<?php 
include ("variables.php");

$fetchingCode =862583;//$_POST['fetchingCode'];
$checkingInData ="[04-01-2022,31]";//$_POST['checkInData'];
$strings="";
//fetchingCode=653934, checkInData=[04-01-2022,31]]

$conn= new mysqli($localhost,$username,'',$databaseName2);


   
if(mysqli_connect_errno()){
     echo mysqli_connect_error();
     exit();
 }else{
     $sqll="SELECT checkingInData FROM members WHERE identity_school_code= '{$fetchingCode}'" ;
     $result = mysqli_query($conn,$sqll);
     if(mysqli_num_rows($result) > 0){
         $result_array = array();
         
         while($row = mysqli_fetch_assoc($result)){
             array_push($result_array, $row);
             
         }
         
     }
 
     //echo json_encode($result_array[0]["checkingInData"]);

     $allData=str_replace('"','',json_encode($result_array[0]["checkingInData"])).$checkingInData.",";
     
     echo $allData;

     $sql = "UPDATE members SET checkingInData='{$allData}' WHERE identity_school_code= '{$fetchingCode}' ";


     if ($conn->query($sql) === TRUE) {
       echo "Record updated successfully";

     } else {
      echo "Error updating record: " . $conn->error;
     }

 }


   
$conn->close();

 
?>