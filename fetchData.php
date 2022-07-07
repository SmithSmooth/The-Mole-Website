<?php
include ("variables.php");
 
$con = mysqli_connect($localhost,$username,'',$databaseName2);
$id = $_GET['id'];
//$arrData=array();

if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
}else{
 
$sql = "SELECT * from $tableName2 where identity_school_code =$id";
 
//continue from here

$res = mysqli_query($con,$sql);

// fetch the resulting rows as an array
$datt=mysqli_fetch_all($res, MYSQLI_ASSOC);

//free the result from memory
mysqli_free_result($res);


$arrlength = count($datt);
$a=0;
$myArr=array();
$object;

while($arrlength >$a){
        $object=["FullName" =>$datt[$a]['full_name'],"IdentityCode" =>$datt[$a]['identification_code'],"Subject" =>$datt[$a]['subject_taught'],
                "SchoolCode" => $datt[$a]['school_code'], "MondaySubject" =>$datt[$a]['monday_subject'], "TuesdaySubject" => $datt[$a]['tuesday_subject'],
                "WenSubject" => $datt[$a]['wenesday_subject'], "ThursdaySubject" => $datt[$a]['thursday_subject'], "FridaySubject" => $datt[$a]['friday_subject'],"MixedCode" =>$datt[$a]['identity_school_code'],
                "PassWord" => $datt[$a]['passwordM'] ,"Email" => $datt[$a]['email'] ];
        
       $myArr[$a]=$object;
    
    $a++;  
}


echo json_encode(array("result"=>$myArr));


//close connection
//mysqli_close($con);

 
//$result = array();
//$row = mysqli_fetch_array($result);
//echo $result;
//while($row = mysqli_fetch_array($result)){
//array_push($result,array('alldata'=>$res));

//));
//echo $result;
//};

 
mysqli_close($con);
}
 
?>
