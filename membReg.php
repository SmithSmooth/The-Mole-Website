<?php
include ("variables.php");

$membOrgCode=$_POST['MembOrgCode'];
$membIdentityCode=$_POST['MembIdenCode'];
$MembEmail=$_POST['MembEmail'];
$MembPassword=$_POST['MembPassword'];
$ans;
$anss;

//Database connection

$con= new mysqli($localhost,$username,'',$databaseName2);

if($con->connect_error){
    die('Connection Failed : '.$con->connect_error);
}else{
   // write query
    $sql="SELECT school_code, identification_code,identity_school_code FROM $tableName2";

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
        if($dat[$x]['school_code'] == $membOrgCode && $dat[$x]['identification_code'] == $membIdentityCode){
            $ansS=$dat[$x]['school_code'];
            $ansI=$dat[$x]['identification_code'];

            $arr=array($ansS,$ansI);
            $arrImp=join('',$arr);

            $strr = preg_replace("/[A-Za-z]/","",$arrImp);


            // Create connection
            $conn = new mysqli($localhost,$username,'',$databaseName2);
            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }

            $sql ="UPDATE $tableName2 SET passwordM='$MembPassword' WHERE identity_school_code= $strr" ;
            $sqll ="UPDATE $tableName2 SET email='$MembEmail' WHERE identity_school_code= $strr" ;

            if ($conn->query($sql) === TRUE) {
              echo "You Have Successfully Registered You will LogIn in The App " ;
            } else {
              echo "Error updating record: " . $conn->error;
            }
            if ($conn->query($sqll) === TRUE) {
                echo "You Can Go to the App. Thank You;";
              } else {
                echo "Error updating record: " . $conn->error;
              }

            $conn->close();

            //header("Location");
            //  After the member has registered he /she will be takes to the app, where they will log
            //in and they will now enjoy the contents of the app

        }
        
    }

}


?>