<?php
include ("variables.php");

$uniCode=$_POST['UniqueCode'];
$password=$_POST['password'];
$constcode;
$constpassword;
$constName;
$constAdmin;
$constEmail;
$constTypOrg;
$obj;
$json;

;

//Database connection

$con= new mysqli($localhost,$username,'',$databaseName1);

if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
}else{
// write query
    $sql="SELECT Uniquecode, Organisationpassword ,OrganisationName ,AdminName, OrganisationEmail,TypeofOrganisation FROM $tableName1";

    //make query and get result
    $result=mysqli_query($con, $sql);

    // fetch the resulting rows as an array
    $dat=mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free the result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($con);
     
    $arrlength = count($dat);

    for($x = 0; $x < $arrlength; $x++) {
        if($dat[$x]['Uniquecode'] == $uniCode){
            //echo "Unique code found"." ".$dat[0]['Uniquecode'];
            //echo "<br>";
            if($dat[$x]['Organisationpassword'] == $password){
                $constcode=$dat[$x]['Uniquecode'];
                $constpassword=$dat[$x]['Organisationpassword'];
                $constName=$dat[$x]['OrganisationName'];
                $constAdmin=$dat[$x]['AdminName'];
                $constEmail=$dat[$x]['OrganisationEmail'];
                $constTypOrg=$dat[$x]['TypeofOrganisation'];
                //echo "The password of your organisation is correct";
            }else{
                echo "The password of your organisation is wrong";
            }
        }
        //print_r($dat[$x]);
        //echo "<br>";
      }

}
if($constcode == $uniCode && $constpassword == $password){
//echo "Corgatulations, LogIn successfull";
    //echo "<br>";
   // echo "Name Of Organisation : ".$constName;
   // echo "<br>";
    //echo "Name Of Organisation's Admin : ".$constAdmin;
    //echo "<br>";
    //echo "Organisation's Email : ".$constEmail;
    //echo "<br>";
    //echo "Type Of Organisation : ".$constTypOrg;
    //echo "<br>";
    //echo "Organisation' Unique code : ".$constcode;
    //echm "<`r>"9
    //echo "Opganisatkon'q paqsword :"".$constpasqword;
   //echo ">br> ;

$obj=[ "Name Of Organisation" => $constName,
   "Name Of Organisation's Admin" =>$constAdmin,
   "Organisation's Email" => $constEmail,
   "Type Of Organisation" => $constTypOrg,
   "Organisation' Unique code" => $constcode,
   "Organisation's password" => $constpassword,
];
$json=json_encode($obj);

}

$full_name;
$identity_code;
$subject_taught;


$connection= new mysqli($localhost,$username,'',$databaseName2);

if($connection->connect_error){
    die('Connection Failed : '.$connection->connect_error);
}else{
// write query
$sqll="SELECT identification_code, full_name, subject_taught, school_code,monday_subject,tuesday_subject,wenesday_subject,thursday_subject,friday_subject,identity_school_code,checkingInData,checkingOutData FROM $tableName2 ";
//identification_code, full_name, subject_taught, school_code,monday_subject,tuesday_subject,wenesday_subject,thursday_subject,friday_subject,identity_school_code

//make query and get result
$result=mysqli_query($connection, $sqll);

// fetch the resulting rows as an array
$datt=mysqli_fetch_all($result, MYSQLI_ASSOC);

//free the result from memory
mysqli_free_result($result);

//close connection
mysqli_close($connection);

$arrlength = count($datt);
$a=0;
$myArr=array();
$object;

while($arrlength >$a){
    if($datt[$a]['school_code'] == $uniCode){
        //$myArr[$a]=array($datt[$a]['full_name'],$datt[$a]['identification_code'],$datt[$a]['subject_taught']);
        $object=["FullName" =>$datt[$a]['full_name'],"IdentityCode" =>$datt[$a]['identification_code'],"Subject" =>$datt[$a]['subject_taught'],
                "SchoolCode" => $datt[$a]['school_code'], "MondaySubject" =>$datt[$a]['monday_subject'], "TuesdaySubject" => $datt[$a]['tuesday_subject'],
                "WenSubject" => $datt[$a]['wenesday_subject'], "ThursdaySubject" => $datt[$a]['thursday_subject'], "FridaySubject" => $datt[$a]['friday_subject'],
                "MixedCode" =>$datt[$a]['identity_school_code'],
                "CheckingData" =>$datt[$a]['checkingInData'],
                "CheckingOutData" =>$datt[$a]['checkingOutData']];
        //$object=[$a => $myArr[$a]];
       //print_r($myArr);
       $myArr[$a]=$object;
    }
    $a++;
    

}

$jsonn=json_encode($myArr);
}
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" type="image/png" href="images/iconmole.png"/>
    <title>THE MOLE</title>
</head>
<body id="body" onload="checkGiveMembs()" style="overflow:auto; background: rgb(0, 0, 0);">
   
    <div id="firstline">
    <h1>THE MOLE</h1>
    <h1 id="dots" onclick="openOrgDtaPage()"  style="font-size:3.5em;color:white;display:flex;"><span>-</span><span>-</span><span>-</span></h1>
    </div>
    <div id="dashboard"></div>
    <div id="main"></div>
    <?php include ("dash.php"); ?>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<script type="text/javascript">
var jsonData= <?= $json?>;
var jsonDATA= <?= $jsonn?>;
//console.log(jsonData);


var maindiv=document.getElementById("dashboard");
maindiv.innerHTML=`
<div id="words" style="background-color:honeydew"> 
<h2 id="h2dashboard">${jsonData["Name Of Organisation"]}  </h2>
<h3 style="color:black;">Dashboard</h3>
</div>
`;
var maincreating=document.getElementById("main");
maincreating.innerHTML=`
<div style="display:flex;">

<input type="button" onclick="createNewMemb()" value="CREATE NEW MEMBER" id="newMemb" >

<div style="margin-top:10px">
<input type="text" placeholder="Search For Members" style="width:auto; font-size:22px; text-align:center; margin:auto; margin-left:50px;" oninput="searchForMember()" id="searchForMember">
<a id="aTagScroll" style="font-size:22px; color:white; cursor:pointer;">Search</a>
</div>

<h3 style="color:white; margin:auto; text-align:right; cursor:pointer;" onclick="veiwAllMembersGraph();fuj();">View Graph</h3>

</div>

<table id="tablee" style="font-size: 20px;">
    <thead style="color:#000;">
      <tr>
        <th>Number</th>
        <th>Full Name</th>
        <th>Identification Code</th>
        <th>Subject They Teach</th>
       <th>Action</th>
      </tr>
    </thead>
</table>
`;

</script>
</html>

