<?php
   include ("variables.php");

  $numOfTimesM=$_POST["numOfTimesM"];
  $numOfTimesT=$_POST["numOfTimesT"];
  $numOfTimesW=$_POST["numOfTimesW"];
  $numOfTimesTH=$_POST["numOfTimesTH"];
  $numOfTimesF=$_POST["numOfTimesF"];

 # making the monday String to update in the database;
  $a=1;
  $mondayArr="[";

  while ($numOfTimesM+1 > $a) {
    $d="editMonTime".(string)$a;
    $mondayArr.=$_POST[$d].",";
    $a++;
  }
  $mondayArr = rtrim($mondayArr, ", ");
  $mondayArr.="]";

  $ac=1;
  $mondayArr.=",[";

  while ($numOfTimesM+1 > $ac) {
    $d="editMonClass".(string)$ac;
    $mondayArr.=$_POST[$d].",";
    $ac++;
  }
  $mondayArr = rtrim($mondayArr, ", ");
  $mondayArr.="]";

  $as=1;
  $mondayArr.=",[";

  while ($numOfTimesM+1 > $as) {
    $d="editMonSubject".(string)$as;
    $mondayArr.=$_POST[$d].",";
    $as++;
  }
  $mondayArr = rtrim($mondayArr, ", ");
  $mondayArr.="]";

  $finalMondayArr=$mondayArr;

  
  //print_r($finalMondayArr);

 # making the tuesday String to update in the database;
  $at=1;
  $tuesdayArr="[";

  while ($numOfTimesT+1 > $at) {
    $d="editMonTimet".(string)$at;
    $tuesdayArr.=$_POST[$d].",";
    $at++;
  }
  $tuesdayArr = rtrim($tuesdayArr, ", ");
  $tuesdayArr.="]";

  $act=1;
  $tuesdayArr.=",[";

  while ($numOfTimesT+1 > $act) {
    $d="editMonClasst".(string)$act;
    $tuesdayArr.=$_POST[$d].",";
    $act++;
  }
  $tuesdayArr = rtrim($tuesdayArr, ", ");
  $tuesdayArr.="]";

  $ast=1;
  $tuesdayArr.=",[";

  while ($numOfTimesT+1 > $ast) {
    $d="editMonSubjectt".(string)$ast;
    $tuesdayArr.=$_POST[$d].",";
    $ast++;
  }
  $tuesdayArr = rtrim($tuesdayArr, ", ");
  $tuesdayArr.="]";

  $finalTuesdayArr=$tuesdayArr;

  
  //print_r($finalTuesdayArr);


 # making the wednesday String to update in the database;
  $aw=1;
  $wenArr="[";

  while ($numOfTimesW+1 > $aw) {
    $d="editMonTimew".(string)$aw;
    $wenArr.=$_POST[$d].",";
    $aw++;
  }
  $wenArr = rtrim($wenArr, ", ");
  $wenArr.="]";

  $acw=1;
  $wenArr.=",[";

  while ($numOfTimesW+1 > $acw) {
    $d="editMonClassw".(string)$acw;
    $wenArr.=$_POST[$d].",";
    $acw++;
  }
  $wenArr = rtrim($wenArr, ", ");
  $wenArr.="]";

  $asw=1;
  $wenArr.=",[";

  while ($numOfTimesW+1 > $asw) {
    $d="editMonSubjectw".(string)$asw;
    $wenArr.=$_POST[$d].",";
    $asw++;
  }
  $wenArr = rtrim($wenArr, ", ");
  $wenArr.="]";

  $finalWenArr=$wenArr;

  
  //print_r($finalWenArr);

 # making the Thur String to update in the database;
  $ath=1;
  $thurArr="[";

  while ($numOfTimesTH+1 > $ath) {
    $d="editMonTimeth".(string)$ath;
    $thurArr.=$_POST[$d].",";
    $ath++;
  }
  $thurArr = rtrim($thurArr, ", ");
  $thurArr.="]";

  $acth=1;
  $thurArr.=",[";

  while ($numOfTimesTH+1 > $acth) {
    $d="editMonClassth".(string)$acth;
    $thurArr.=$_POST[$d].",";
    $acth++;
  }
  $thurArr = rtrim($thurArr, ", ");
  $thurArr.="]";

  $asth=1;
  $thurArr.=",[";

  while ($numOfTimesTH+1 > $asth) {
    $d="editMonSubjectth".(string)$asth;
    $thurArr.=$_POST[$d].",";
    $asth++;
  }
  $thurArr = rtrim($thurArr, ", ");
  $thurArr.="]";

  $finalThurArr=$thurArr;


  //print_r($finalThurArr);

 # making the friday String to update in the database;
  $af=1;
  $firdayArr="[";

  while ($numOfTimesF+1 > $af) {
    $d="editMonTimef".(string)$af;
    $firdayArr.=$_POST[$d].",";
    $af++;
  }
  $firdayArr = rtrim($firdayArr, ", ");
  $firdayArr.="]";

  $acf=1;
  $firdayArr.=",[";

  while ($numOfTimesF+1 > $acf) {
    $d="editMonClassf".(string)$acf;
    $firdayArr.=$_POST[$d].",";
    $acf++;
  }
  $firdayArr = rtrim($firdayArr, ", ");
  $firdayArr.="]";

  $asf=1;
  $firdayArr.=",[";

  while ($numOfTimesF+1 > $asf) {
    $d="editMonSubjectf".(string)$asf;
    $firdayArr.=$_POST[$d].",";
    $asf++;
  }
  $firdayArr = rtrim($firdayArr, ", ");
  $firdayArr.="]";

  $finalFridayArr=$firdayArr;

  
  //print_r($finalFridayArr);



 $editFullName=$_POST["editFullName"];
 $editIdentificationCode=$_POST["editIdentificationCode"];
 $editSubjectTaught=$_POST["editSubjectTaught"];
 $editMemberSchoolCode=$_POST["editMemberSchoolCode"];
 $mixedCode=$_POST["mixedCode"];

 $str = preg_replace("/[A-Za-z]/","",$editMemberSchoolCode);
 $strr = preg_replace("/[A-Za-z]/","",$editIdentificationCode);
 $ty=array($str,$strr);
 $tyImproved=join("",$ty);
 
 // Create connection
 $conn = new mysqli($localhost, $username, $password, $databaseName1);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

 $sql = "UPDATE $tableName2 SET full_name='$editFullName' ,identification_code='$editIdentificationCode',
 subject_taught='$editSubjectTaught', monday_subject='$finalMondayArr' ,tuesday_subject='$finalTuesdayArr',
 wenesday_subject='$finalWenArr', thursday_subject='$finalThurArr', friday_subject='$finalFridayArr', identity_school_code='$tyImproved' WHERE identity_school_code = $mixedCode";

 if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
 } else {
   echo "Error updating record: " . $conn->error;
 }

 $conn->close();
 
 header("Location: login.html");

?>