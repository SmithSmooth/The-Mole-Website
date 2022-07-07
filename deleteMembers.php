<?php
include ("variables.php");

$dsc=$_COOKIE["deltingvaluesSCode"];
$d=$_COOKIE["deltingvaluesICode"];
$arr=array($dsc,$d);
$arrImp=join('',$arr);

$strr = preg_replace("/[A-Za-z]/","",$arrImp);


$dbconn= new mysqli($localhost,$username,'',$databaseName2);
    
$sql = "DELETE FROM $tableName2 WHERE  identity_school_code= $strr";
    
//execute query and delete data
if($dbconn->query($sql)){
    echo "Data deleted successfully";
        
}else{
    echo "Data deletion failed ".$dbconn->connect_error;
        
}
     
//close connection
$dbconn->close();
    

header("Location: login.html");
//echo '<script type="text/JavaScript"> location.reload(); </script>';
 
?>