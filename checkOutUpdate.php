<?php 
include ("variables.php");

$fetchingCode =$_POST['fetchingCode'];
$checkingOutData =$_POST['outData'];


$conn= new mysqli($localhost,$username,'',$databaseName2);


   
if(mysqli_connect_errno()){
     echo mysqli_connect_error();
     exit();
 }else{
     $sqll="SELECT checkingOutData FROM members WHERE identity_school_code= '{$fetchingCode}'" ;
     $result = mysqli_query($conn,$sqll);
     if(mysqli_num_rows($result) > 0){
         $result_array = array();
         
         while($row = mysqli_fetch_assoc($result)){
             array_push($result_array, $row);
             
         }
         
     }
 
     //echo json_encode($result_array[0]["checkingInData"]);

     $allData=str_replace('"','',json_encode($result_array[0]["checkingOutData"])).$checkingOutData.",";
     
     echo $allData;

     $sql = "UPDATE members SET checkingOutData='{$allData}' WHERE identity_school_code= '{$fetchingCode}' ";


     if ($conn->query($sql) === TRUE) {
       echo "Record updated successfully";

     } else {
      echo "Error updating record: " . $conn->error;
     }

 }


   
$conn->close();

 
?>