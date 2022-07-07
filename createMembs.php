<?php 
include ("variables.php");

$memberName=$_POST['createName'];
$memberIdentityCode= $_POST['createIdentityCode'];
$memberSubjectTaught= $_POST['createSubjectTaught'];

 $a=$_COOKIE["monDate"];
 $b=$_COOKIE["codeS"];
 $c=$_COOKIE["tueDate"] ;
 $d=$_COOKIE["wenDate"] ;
 $e=$_COOKIE["thurDate"] ;
 $f=$_COOKIE["friDate"];

 $str = preg_replace("/[A-Za-z]/","",$b);
 $strr = preg_replace("/[A-Za-z]/","",$memberIdentityCode);
 $ty=array($str,$strr);
 $tyImproved=join("",$ty);

 
 //echo $a." ".$b." ".$c." ".$d." ".$e." ".$f;

$conn= new mysqli($localhost,$username,'',$databaseName2);
 if($conn->connect_error){
     die('Connection Failed : '.$conn->connect_error);
 }else{
     $stmt= $conn->prepare("insert into members(school_code, identification_code, full_name, subject_taught, 
     monday_subject, tuesday_subject,wenesday_subject,thursday_subject,friday_subject,identity_school_code) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssss", $b, $memberIdentityCode, $memberName, $memberSubjectTaught, $a , $c ,$d ,$e ,$f,$tyImproved );
     $stmt->execute();
     //echo "Your organisation has been successful registered ....";
     $stmt->close();
     $conn->close();
     
     header("Location: login.html");
 }


?>



