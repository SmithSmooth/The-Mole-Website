 <?php include("extended.php");?>
<script type="text/javascript">
 function openOrgDtaPage() {
    var a= document.createElement("div");
    var b= document.getElementById("body");
    a.innerHTML=`<div>Organaisation's Full Name : <strong>${jsonData['Name Of Organisation']}</strong></div>
    <div>Name of The Admin : <strong>${jsonData['Name Of Organisation\'s Admin']}</strong></div>
    <div>Organisation's Email :  <strong>${jsonData['Organisation\'s Email']}</strong></div>
    <div>Type Of Organisation :  <strong>${jsonData['Type Of Organisation']}</strong></div>
    <div>
    <button style="font-size:25px;background-color:black;color:honeydew;border:none;cursor:pointer;" onclick="makeClasses()">Make Your Classes
    </button>
    </div>

    <div onclick="closeOrgDtaPage()"> <div id="close">CLOSE</div> </div>
    `;
    a.id="navbar";
    a.style="background:honeydew;"
    b.appendChild(a);
    
}
function closeOrgDtaPage(){
    var b= document.getElementById("body")
    var c=document.getElementById("navbar");
    c.parentNode.removeChild(c);
}

function repeatStringNumTimes(string, times) {
  var repeatedString = "";
  while (times > 0) {
    repeatedString += string;
    times--;
  }
  return repeatedString;
}

function createNumberOfLessonTemplates(){
    let cc= document.getElementById("writeNumberOfLessons");
    var a= document.getElementById("allstuff");
    var x=document.createElement('div');
    x.id="allrowsOflessons";

    u=`<div class="alllessonsMON" style="margin-top:15px;">
          <div id='time'>
              <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
              text-align: center;
              margin:auto;">Time : </label>
              <input name="MondaySetting" type='time' class="MondaySetting"  required style="height: 45px;
              width: 70%;
              outline: none;
              font-size: 25px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
              margin-right:5px;
              margin-top:15px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">   </div>


          <div id='class'>
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lwcidc Sals',"Arial, sans/serif;
          font-weight:500
           text-align: left;
          margin:auto;">Class:  </label>

         <input list="classes" name="class" class="mondayclass" required style="height: 45px;
           width: 70%;
          margin-top:15px;
        outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
          border: 1px solid #ccc;
          margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="classes" style="font-size: 25px;font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;">
  
             <option value ='Form One' disabled>
             <option value="1 WEST">
             <option value="1 EAST">
             <option value="1 SOUTH">
             <option value="1 NORTH">
             <option value="1 NORTH EAST">
             <option value="1 NORTH WEST">
             <option value="1 SOUTH EAST">
             <option value="1 SOUTH WEST">
             <option value="1 P">
             <option value="1 Q">

             <option value ='Form Two' disabled>
             <option value="2 WEST">
             <option value="2 EAST">
             <option value="2 SOUTH">
             <option value="2 NORTH">
             <option value="2 NORTH EAST">
             <option value="2 NORTH WEST">
             <option value="2 SOUTH EAST">
             <option value="2 SOUTH WEST">
             <option value="2 P">
             <option value="2 Q">

             <option value ='Form Three' disabled>
             <option value="3 WEST">
             <option value="3 EAST">
             <option value="3 SOUTH">
             <option value="3 NORTH">
             <option value="3 NORTH EAST">
             <option value="3 NORTH WEST">
             <option value="3 SOUTH EAST">
             <option value="3 SOUTH WEST">
             <option value="3 P">
             <option value="3 Q">

             <option value ='Form Four' disabled>
             <option value="4 WEST">
             <option value="4 EAST">
             <option value="4 SOUTH">
             <option value="4 NORTH">
             <option value="4 NORTH EAST">
             <option value="4 NORTH WEST">
             <option value="4 SOUTH EAST">
             <option value="4 SOUTH WEST">
             <option value="4 P">
             <option value="4 Q">
           </datalist>  </div>

          <div id="sub">
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Subject : </label>

           <input list="subjects" name="subjectsTaughtInClass" class="mondaysubject" required style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="subjects">
             <option value="Mathematics">
             <option value="English">
             <option value="Kiswahili">
             <option value="Biology">
             <option value="Chemistry">
             <option value="Physics">
             <option value="History">
             <option value="Geography">
             <option value="Computer">
             <option value="Business">
             <option value="Agriculture">
             <option value="Aviation">
             <option value="Electricity">
             <option value="Power Mechanics">
             <option value="French">
             <option value="German">
             <option value="Music">
           </datalist></div> </div>
           
           `
    let r=cc.value;
    
    let p=repeatStringNumTimes(u, r);
    x.innerHTML=p;
   
    a.appendChild(x);
}
function createNumberOfLessonTemplatesT(){
   let cc= document.getElementById("writeNumberOfLessonsT");
  var a= document.getElementById("allstuffT");
   var x=document.createElement('div');
   x.id="allrowsOflessonsT";

    u=` <div class="allLessonsTUE" style="margin.top:150x;">
       <div id='timeTUE'>
              <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
              text-align: center;
              margin:auto;">Time : </label>
              <input name="MondaySettingTUE" type='time' class="tuesdaySettingTime" required style="height: 45px;
              width: 70%;
              outline: none;
              font-size: 25px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
              margin-right:5px;
              margin-top:15px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">   </div>


          <div id='classTUE'>
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Class : </label>

           <input list="classesTUE" name="classTUE" class="tuesdaySettingclass" required style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="classesTUE" style="font-size: 25px;font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;">
  
             <option value ='Form One' disabled>
             <option value="1 WEST">
             <option value="1 EAST">
             <option value="1 SOUTH">
             <option value="1 NORTH">
             <option value="1 NORTH EAST">
             <option value="1 NORTH WEST">
             <option value="1 SOUTH EAST">
             <option value="1 SOUTH WEST">
             <option value="1 P">
             <option value="1 Q">

             <option value ='Form Two' disabled>
             <option value="2 WEST">
             <option value="2 EAST">
             <option value="2 SOUTH">
             <option value="2 NORTH">
             <option value="2 NORTH EAST">
             <option value="2 NORTH WEST">
             <option value="2 SOUTH EAST">
             <option value="2 SOUTH WEST">
             <option value="2 P">
             <option value="2 Q">

             <option value ='Form Three' disabled>
             <option value="3 WEST">
             <option value="3 EAST">
             <option value="3 SOUTH">
             <option value="3 NORTH">
             <option value="3 NORTH EAST">
             <option value="3 NORTH WEST">
             <option value="3 SOUTH EAST">
             <option value="3 SOUTH WEST">
             <option value="3 P">
             <option value="3 Q">

             <option value ='Form Four' disabled>
             <option value="4 WEST">
             <option value="4 EAST">
             <option value="4 SOUTH">
             <option value="4 NORTH">
             <option value="4 NORTH EAST">
             <option value="4 NORTH WEST">
             <option value="4 SOUTH EAST">
             <option value="4 SOUTH WEST">
             <option value="4 P">
             <option value="4 Q">
           </datalist>  </div>

          <div id="subTUE">
           <label style="font-size:28px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          font-weight: 500;
           text-align: left;
         margin:auto;">Subject : </label>

         <input list="subjectsTUE" name="subjectsTaughtInClassTUE" class="tuesdaySettingSub" required style="height: 45px;
         width: 70%;
          margin-top:15px;
         outline: none;
           font-size: 25px;
          border-radius: 5px;
        padding left: 15px;
          border:1px solid #ccc;
         margin-right:5px;
           border-bottom-width: 2px;
          transition: all 0.3s ease;">
           <datalist id="subjectsTUE">
             <option value="Mathematics">
             <option value="English">
             <option value="Kiswahili">
             <option value="Biology">
             <option value="Chemistry">
             <option value="Physics">
             <option value="History">
             <option value="Geography">
             <option value="Computer">
             <option value="Business">
             <option value="Agriculture">
             <option value="Aviation">
             <option value="Electricity">
             <option value="Power Mechanics">
             <option value="French">
             <option value="German">
             <option value="Music">
           </datalist></div> </div>`
    let r=cc.value;
  
    let p=repeatStringNumTimes(u, r);
    x.innerHTML=p;
    
    a.appendChild(x);
}
function createNumberOfLessonTemplatesW(){
    let cc= document.getElementById("writeNumberOfLessonsW");
    var a= document.getElementById("allstuffW");
    var x=document.createElement('div');
    x.id="allrowsOflessonsW";

    u=`<div class="alllessonsWEN" style="margin-top:15px;">
        <div id='timeWEN'>
              <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
              text-align: center;
              margin:auto;">Time : </label>
              <input name="MondaySettingWEN" type='time' class="wednesdaytime" required style="height: 45px;
              width: 70%;
              outline: none;
              font-size: 25px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
              margin-right:5px;
              margin-top:15px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">   </div>


          <div id='classWEN'>
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Class : </label>

           <input list="classesWEN" name="classWEN" class="wednesdayclass" required style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="classesWEN" style="font-size: 25px;font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;">
  
             <option value ='Form One' disabled>
             <option value="1 WEST">
             <option value="1 EAST">
             <option value="1 SOUTH">
             <option value="1 NORTH">
             <option value="1 NORTH EAST">
             <option value="1 NORTH WEST">
             <option value="1 SOUTH EAST">
             <option value="1 SOUTH WEST">
             <option value="1 P">
             <option value="1 Q">

             <option value ='Form Two' disabled>
             <option value="2 WEST">
             <option value="2 EAST">
             <option value="2 SOUTH">
             <option value="2 NORTH">
             <option value="2 NORTH EAST">
            <option value="2 NORTH WEST">
            <option value="2 SOUTH EAST">
          <option value="2 SOUTH WEST">
          <option value="2 P">
           <option value="2 Q"<

             <option value='Form Three' disabled>
           <option value="3 WEST">
            <option value="3 EAST">
          <option value="3 SOUTH">
            <option value="3 NORTH">
             <option value="3 NORTH EAST">
          <option value="3 NORTH WEST">
            <op4ion value="3 SOUTH EAST">
            <option value="3 SOUTH WEST">
             <option value="3 P">
             <option value="3 Q">

             <option value ='Form Four' disabled>
             <option value="4 WEST">
             <option value="4 EAST">
             <option value="4 SOUTH">
             <option value="4 NORTH">
             <option value="4 NORTH EAST">
             <option value="4 NORTH WEST">
             <option value="4 SOUTH EAST">
             <option value="4 SOUTH WEST">
             <option value="4 P">
             <option value="4 Q">
           </datalist>  </div>

          <div id="subWEN">
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Subject : </label>

           <input list="subjectsWEN" name="subjectsTaughtInClassWEN" class="wednesdaysubject" required style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="subjectsWEN">
             <option value="Mathematics">
             <option value="English">
             <option value="Kiswahili">
             <option value="Biology">
             <option value="Chemistry">
             <option value="Physics">
             <option value="History">
             <option value="Geography">
             <option value="Computer">
             <option value="Business">
             <option value="Agriculture">
             <option value="Aviation">
             <option value="Electricity">
             <option value="Power Mechanics">
             <option value="French">
             <option value="German">
             <option value="Music">
           </datalist></div> </div>`
    let r=cc.value;
    
    let p=repeatStringNumTimes(u, r);
    x.innerHTML=p;
    
    a.appendChild(x);
}
function createNumberOfLessonTemplatesTH(){
    let cc= document.getElementById("writeNumberOfLessonsTH");
    var a= document.getElementById("allstuffTH");
    var x=document.createElement('div');
    x.id="allrowsOflessonsTH";

    u=`<div class="alllessonsTH" style="margin-top:15px;">
        <div id='timeTH'>
              <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
              text-align: center;
              margin:auto;">Time : </label>
              <input name="MondaySettingTH" type='time' class="thursdaytime" required style="height: 45px;
              width: 70%;
              outline: none;
              font-size: 25px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
              margin-right:5px;
              margin-top:15px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">   </div>


          <div id='classTH'>
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
          text-align: left;
         margin:auto;">Class : </label>

          <input list="classesTH"  name="allclassTH" class="thursdayclass" required style="height: 47px;
          width: 70%;
           margin-top:15px;
          outline: none;
        font-size: 25px;
      border-radius: 5px;
         padding-left: 15px;
          border: 1px solid #ccc;
           margin-right:5px;
          border-bottom-width: 2px;
           transition: all 0.3s ease">
           <datalist id="classesTH" style="font-size: 25px;font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;">
             <option value ='Form One' disabled>
             <option value="1 WEST">
             <option value="1 EAST">
             <option value="1 SOUTH">
             <option value="1 NORTH">
             <option value="1 NORTH EAST">
             <option value="1 NORTH WEST">
             <option value="1 SOUTH EAST">
             <option value="1 SOUTH WEST">
             <option value="1 P">
             <option value="1 Q">

             <option value ='Form Two' disabled>
             <option value="2 WEST">
             <option value="2 EAST">
             <option value="2 SOUTH">
             <option value="2 NORTH">
             <option value="2 NORTH EAST">
             <option value="2 NORTH WEST">
             <option value="2 SOUTH EAST">
             <option value="2 SOUTH WEST">
             <option value="2 P">
             <option value="2 Q">

             <option value ='Form Three' disabled>
             <option value="3 WEST">
             <option value="3 EAST">
             <option value="3 SOUTH">
             <option value="3 NORTH">
             <option value="3 NORTH EAST">
             <option value="3 NORTH WEST">
             <option value="3 SOUTH EAST">
             <option value="3 SOUTH WEST">
             <option value="3 P">
             <option value="3 Q">

             <option value ='Form Four' disabled>
             <option value="4 WEST">
             <option value="4 EAST">
             <option value="4 SOUTH">
             <option value="4 NORTH">
             <option value="4 NORTH EAST">
             <option value="4 NORTH WEST">
             <option value="4 SOUTH EAST">
             <option value="4 SOUTH WEST">
             <option value="4 P">
             <option value="4 Q">
           </datalist>  </div>

          <div id="subTH">
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Subject : </label>

           <input list="subjectsTH" name="subjectsTaughtInClassTH" class="thursdaysubject" required style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="subjectsTH">
             <option value="Mathematics">
             <option value="English">
             <option value="Kiswahili">
             <option value="Biology">
             <option value="Chemistry">
             <option value="Physics">
             <option value="History">
             <option value="Geography">
             <option value="Computer">
             <option value="Business">
             <option value="Agriculture">
             <option value="Aviation">
             <option value="Electricity">
             <option value="Power Mechanics">
             <option value="French">
             <option value="German">
             <option value="Music">
           </datalist></div> </div>`
    let r=cc.value;
    
    let p=repeatStringNumTimes(u, r);
    x.innerHTML=p;
    
    a.appendChild(x);
}
function createNumberOfLessonTemplatesF(){
    let cc= document.getElementById("writeNumberOfLessonsF");
    var a= document.getElementById("allstuffF");
    var x=document.createElement('div');
    x.id="allrowsOflessonsF";

    u=`<div class="alllessonsF" style="margin-top:15px;">
         <div id='timeF'>
              <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
              text-align: center;
              margin:auto;">Time : </label>
              <input name="MondaySettingF" type='time' class="fridaytime" required style="height: 45px;
              width: 70%;
              outline: none;
              font-size: 25px;
              border-radius: 5px;
              padding-left: 15px;
              border: 1px solid #ccc;
              margin-right:5px;
              margin-top:15px;
              border-bottom-width: 2px;
              transition: all 0.3s ease;">   </div>


          <div id='classF'>
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;">Class : </label>

           <input list="classesF" name="classF" required class="fridayclass" style="height: 45px;
           width: 70%;
           margin-top:15px;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="classesF" style="font-size: 25px;font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;">
  
             <option value ='Form One' disabled>
             <option value="1 WEST">
             <option value="1 EAST">
             <option value="1 SOUTH">
             <option value="1 NORTH">
             <option value="1 NORTH EAST">
             <option value="1 NORTH WEST">
             <option value="1 SOUTH EAST">
             <option value="1 SOUTH WEST">
             <option value="1 P">
             <option value="1 Q">

             <option value ='Form Two' disabled>
             <option value="2 WEST">
             <option value="2 EAST">
             <option value="2 SOUTH">
             <option value="2 NORTH">
             <option value="2 NORTH EAST">
             <option value="2 NORTH WEST">
             <option value="2 SOUTH EAST">
             <option value="2 SOUTH WEST">
             <option value="2 P">
             <option value="2 Q">

             <option value ='Form Three' disabled>
             <option value="3 WEST">
             <option value="3 EAST">
             <option value="3 SOUTH">
             <option value="3 NORTH">
             <option value="3 NORTH EAST">
             <option value="3 NORTH WEST">
             <option value="3 SOUTH EAST">
             <option value="3 SOUTH WEST">
             <option value="3 P">
             <option value="3 Q">

             <option value ='Form Four' disabled>
             <option value="4 WEST">
             <option value="4 EAST">
             <option value="4 SOUTH">
             <option value="4 NORTH">
             <option value="4 NORTH EAST">
             <option value="4 NORTH WEST">
             <option value="4 SOUTH EAST">
             <option value="4 SOUTH WEST">
             <option value="4 P">
             <option value="4 Q">
           </datalist>  </div>

          <div id="subF">
           <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           font-weight: 500;
           text-align: left;
           margin:auto;" >Subject : </label>

           <input list="subjectsF" name="subjectsTaughtInClassF" class="fridaysubject" required style="height: 45px;
            width: 70%;
            margin:top:15px;
            outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;">
           <datalist id="subjectsF">
             <option value="Mathematics">
             <option value="English">
             <option value="Kiswahili">
             <option value="Biology">
             <option value="Chemistry">
             <option value="Physics">
             <option value="History">
             <option value="Geography">
             <option value="Computer">
             <option value="Business">
             <option value="Agriculture">
             <option value="Aviation">
             <option value="Electricity">
             <option value="Power Mechanics">
             <option value="French">
             <option value="German">
             <option value="Music">
           </datalist></div> </div>`
    let r=cc.value;
    
    let p=repeatStringNumTimes(u, r);
    x.innerHTML=p;
    
    a.appendChild(x);
}
function megaFunction(){
    var monData=document.getElementById("monData");
    var tueData=document.getElementById("tueData");
    var wenData=document.getElementById("wenData");
    var thurData=document.getElementById("thData");
    var friData=document.getElementById("friData");

 //Monday Data
    var uj=document.getElementsByClassName("MondaySetting");
    var ujLength=uj.length;
    var alltime=[];
    var f=0;
    
    while(ujLength>f){
        alltime[f]=uj[f].value;
        f++;
    }

    var gh=document.getElementsByClassName("mondayclass");
    var ghLength=gh.length;
    var allclass=[];
    var t=0;

    while(ghLength>t){
        allclass[t]=gh[t].value;
        t++;
    }

    var df=document.getElementsByClassName("mondaysubject");
    var dfLength=df.length;
    var allsubject=[];
    var n=0;

    while(dfLength>n){
        allsubject[n]=df[n].value;
        n++;
    }

    var mondayTotalData=`[${alltime}], [${allclass}], [${allsubject}]`;
    monData.name=mondayTotalData;

 //Tuesday Data
    var ujt=document.getElementsByClassName("tuesdaySettingTime");
    var ujtLength=ujt.length;
    var alltimet=[];
    var ft=0;
    
    while(ujtLength>ft){
        alltimet[ft]=ujt[ft].value;
        ft++;
    }

    var ght=document.getElementsByClassName("tuesdaySettingclass");
    var ghtLength=ght.length;
    var allclasst=[];
    var tt=0;

    while(ghtLength>tt){
        allclasst[tt]=ght[tt].value;
        tt++;
    }

    var dft=document.getElementsByClassName("tuesdaySettingSub");
    var dftLength=dft.length;
    var allsubjectt=[];
    var nt=0;

    while(dftLength>nt){
        allsubjectt[nt]=dft[nt].value;
        nt++;
    }

    var tuesdayTotalData=`[${alltimet}], [${allclasst}], [${allsubjectt}]`;
    tueData.name=tuesdayTotalData;

 //Wednesday Data
    var ujw=document.getElementsByClassName("wednesdaytime");
    var ujwLength=ujw.length;
    var alltimew=[];
    var fw=0;
    
    while(ujwLength>fw){
        alltimew[fw]=ujw[fw].value;
        fw++;
    }

    var ghw=document.getElementsByClassName("wednesdayclass");
    var ghwLength=ghw.length;
    var allclassw=[];
    var tw=0;

    while(ghwLength>tw){
        allclassw[tw]=ghw[tw].value;
        tw++;
    }

    var dfw=document.getElementsByClassName("wednesdaysubject");
    var dfwLength=dfw.length;
    var allsubjectw=[];
    var nw=0;

    while(dfwLength>nw){
        allsubjectw[nw]=dfw[nw].value;
        nw++;
    }

    var wenoTotalData=`[${alltimew}], [${allclassw}], [${allsubjectw}]`;
    wenData.name=wenoTotalData;

 // Thursday Data
    var ujh=document.getElementsByClassName("thursdaytime");
    var ujhLength=ujh.length;
    var alltimeh=[];
    var fh=0;
    
    while(ujhLength>fh){
        alltimeh[fh]=ujh[fh].value;
        fh++;
    }

    var ghh=document.getElementsByClassName("thursdayclass");
    var ghhLength=ghh.length;
    var allclassh=[];
    var th=0;

    while(ghhLength>th){
        allclassh[th]=ghh[th].value;
        th++;
    }

    var dfh=document.getElementsByClassName("thursdaysubject");
    var dfhLength=dfh.length;
    var allsubjecth=[];
    var nh=0;

    while(dfhLength>nh){
        allsubjecth[nh]=dfh[nh].value;
        nh++;
    }

    var thursdayTotalData=`[${alltimeh}], [${allclassh}], [${allsubjecth}]`;
    thurData.name=thursdayTotalData;

 //Friday Data
    var ujf=document.getElementsByClassName("fridaytime");
    var ujfLength=ujf.length;
    var alltimef=[];
    var ff=0;
    
    while(ujfLength>ff){
        alltimef[ff]=ujf[ff].value;
        ff++;
    }

    var ghf=document.getElementsByClassName("fridayclass");
    var ghfLength=ghf.length;
    var allclassf=[];
    var tf=0;

    while(ghfLength>tf){
        allclassf[tf]=ghf[tf].value;
        tf++;
    }

    var dff=document.getElementsByClassName("fridaysubject");
    var dffLength=dff.length;
    var allsubjectf=[];
    var nf=0;

    while(dffLength>nf){
        allsubjectf[nf]=dff[nf].value;
        nf++;
    }

    var fridayTotalData=`[${alltimef}], [${allclassf}], [${allsubjectf}]`;
    friData.name=fridayTotalData;

 //

 let cv=jsonData["Organisation' Unique code"];
 console.log(cv);
 let as=document.getElementById("memberOrgCode");
 as.name=cv;
 
  
 createCookie("monDate", mondayTotalData, "1");

 createCookie("tueDate", tuesdayTotalData, "1");

 createCookie("wenDate", wenoTotalData, "1");

 createCookie("thurDate", thursdayTotalData, "1");
 createCookie("friDate", fridayTotalData, "1");
 createCookie("codeS", cv, "1");

 
}


// Function to create the cookie 
function createCookie(name, valuee, minutes) { 
	var expires; 
	
	if (minutes) { 
		var date = new Date(); 
		date.setTime(date.getTime() + (minutes  * 60 * 1000)); 
		expires = "; expires=" + date.toGMTString(); 
	} 
	else { 
		expires = ""; 
	} 
	
	document.cookie = escape(name) + "=" + 
		escape(valuee) + expires + "; path=/"; 
} 


function closeNewMemb(){
  let hgjs=document.getElementById("newMembb");
  hgjs.parentNode.removeChild(hgjs);

}


function createNewMemb(){
    var weekdays=["Monday","Tuesday","Wednesday","Thursday","Friday"];
    var body= document.getElementById("body");
    var newMemb=document.createElement("div");
    newMemb.id="newMembb";
    newMemb.style=`width:50%;
    height: 100vh;
    position: absolute;
    overflow: auto;
    top:0;
    bottom: 0;
    margin:auto;
    background-color:honeydew ;`;

    newMemb.innerHTML=`
     <h5 style="cursor:pointer;margin:auto;color:red;font-size:20px; position:absolute;top:2px;right:0;" onclick="closeNewMemb()">Close</h5>
     <h4 style="font-size: 30px;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         font-weight: 500;
         text-align: center;
         margin:auto;
         text-decoration: underline;
         ">New Member</h4>
    
        <form action="createMembs.php" method="post">

          <div style="display:flex; margin-top:10px;">

             <label 
             style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
             text-align: left;
             margin:auto;">Name : </label>

             <input id='createName' name='createName' type='text' placeholder="Name Of Member" required style="height: 45px;
             width: 70%;
             outline: none;
             font-size: 25px;
             border-radius: 5px;
              padding-left: 15px;
             border: 1px solid #ccc;
             margin-right:5px;
             border-bottom-width: 2px;
             transition: all 0.3s ease;"></input>

          </div>

          <div style="display:flex; margin-top:10px;">

             <label style="font-size:25px; font-family: 'Trebuchet MS', 'Lucida Sans Wnicmde','Lucida Grande', 'Nucida Sans';
               font-weight:500;
               text-align: left;
               margin-auto;">Identification Code (Use Small Letters) : </label>

             <input id='createIdentityCode' name="createIdentityCode" type='text' placeholder=" Eg: 16mhs " required style="height: 40px;
             width: 50px
             outline: none;
             font-size: 25px;
             border-radius: 5px;
             padding-left: 15px;
             border: 1px solid #ccc;
             margin-right:5px;
             border-bottom-width: 2px;
             transition: all 0.3s ease;"></input>

          </div>

          <div style="display:flex; margin-top:10px;">

            <label 
            style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 500;
            text-align: left;
            margin:auto;">Subject('s) Taught : </label>

           <input id='createSubjectTaught' name='createSubjectTaught' type='text' placeholder="Eg , Maths And Biology " required style="height: 45px;
           width: 50%;
           outline: none;
           font-size: 25px;
           border-radius: 5px;
           padding-left: 15px;
           border: 1px solid #ccc;
           margin-right:5px;
           border-bottom-width: 2px;
           transition: all 0.3s ease;"></input>

          </div>

          <div>
            <h4 style="font-size: 30px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-weight: 500;
            text-align: center;
            margin:auto;
            margin-top:15px;
            text-decoration: underline;
            ">Set Members TimeTable</h4></div>

           <div id="days">
             <h4 style="font-size: 30px;
             font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
             text-align: center;
             margin:auto;
             margin-top:10px;
             color: chocolate;
             ">${weekdays[0]}</h4></div>
             <input type="text" style="visibility: hidden;" id="monData">

            <div id="howmanyLessons" >
               <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                text-align: left;
                margin:auto;">How Many Lessons Does The Member Have Today ?</label>

                 <input type="number" id="writeNumberOfLessons" style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;">
                 <div onclick="createNumberOfLessonTemplates()"  style="font-size:28px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;margin:10px; color:hotpink; background-color:#000; cursor:pointer; width:50%;">Make Temeplates</div>
             </div>
              <div id="allstuff"></div>


            <div id="daysT">
             <h4 style="font-size: 30px;
             font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
             text-align: center;
             margin:auto;
             margin-top:10px;
             color: chocolate;
             ">${weekdays[1]}</h4></div>
             <input type="text" style="visibility: hidden;" id="tueData">
             <div id="howmanyLessonsT" >
               <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                text-align: left;
               margin:auto;">How Many Lessons Does The Member Have Today ?</label>

              <input type="number" id="writeNumberOfLessonsT" style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
              text-align: center;
                margin:auto;">
            <div onclick="createNumberOfLessonTemplatesT()"  style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;margin:10px; color:hotpink; background-color:#000; cursor:pointer; width:50%;">Make Temeplates</div>
             </div>
              <div id="allstuffT"></div>


            <div id="daysW">
             <h4 style="font-size: 30px;
             font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
             text-align: center;
             margin:auto;
             margin-top:10px;
             color: chocolate;
             ">${weekdays[2]}</h4></div>
             <input type="text" style="visibility: hidden;" id="wenData">
              <div id="howmanyLessonsW" >
               <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                text-align: left;
                margin:auto;">How Many Lessons Does The Member Have Today ?</label>

                 <input type="number" id="writeNumberOfLessonsW" style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;">
                 <div onclick="createNumberOfLessonTemplatesW()"  style="font-size:28px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;margin:10px; color:hotpink; background-color:#000; cursor:pointer; width:50%;">Make Temeplates</div>
             </div>
              <div id="allstuffW"></div>  
              
              

            <div id="daysTH">
             <h4 style="font-size: 30px;
             font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             font-weight: 500;
             text-align: center;
             margin:auto;
             margin-top:10px;
             color: chocolate;
             ">${weekdays[3]}</h4></div>
             <input type="text" style="visibility: hidden;" id="thData">
              <div id="howmanyLessonsTH" >
               <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                text-align: left;
                margin:auto;">How Many Lessons Does The Member Have Today ?</label>

                <input type="number" id="writeNumberOfLessonsTH" style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                 font-weight: 500;
                 text-align: center;
                 margin:auto;">
                <div onclick="createNumberOfLessonTemplatesTH()"  style="font-size:28px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                 font-weight: 500;
                 text-align: center;
                 margin:auto;margin:10px; color:hotpink; background-color:#000; cursor:pointer; width:50%;" >Make Temeplates</div>
              </div>
             <div id= "allstuffTH"></div>



             <div id="daysF">
            <h4 style="font-size: 30px;
              font-family: Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              font-weight: 500;
               text-align: center;
              margin:auto;
              margin-top:10px;
              color:chocolate ;
            ">${weekdays[4]}</h4></div>
            <input type="text" style="visibility: hidden;" id="friData">
              <div id="howmanyLessonsF" >
               <label style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                text-align: left;
                margin:auto;">How Many Lessons Does The Member Have Today ?</label>

                 <input type="number" id="writeNumberOfLessonsF" style="font-size:28px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;">
                 <div onclick="createNumberOfLessonTemplatesF()"  style="font-size:28px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                font-weight: 500;
                 text-align: center;
                 margin:auto;margin:10px; color:hotpink; background-color:#000; cursor:pointer; width:50%;">Make Temeplates</div>
             </div>
              <div id="allstuffF"></div>


         
         <div style="width:100%;">
         <input type="submit" onclick="megaFunction()"  value="Finish" id="createFullMember" style="font-size:35px;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         font-weight: 500;
         text-align: center;
         margin:auto;
         color:lime;
         background-color:white;
         width:50%;
         height:auto;
         margin-bottom:15px;
         ">
         </div>

         <input type="text" id="memberOrgCode" style="visibility: hidden;">
    

        </form>
     `;

    body.appendChild(newMemb);


}


function checkGiveMembs(){
    var numberOfMembInDatabase=1000;
   //console.log(jsonDATA);
   var table=document.getElementById("tablee");
   var a=1;
   var dfg;

   for (let i = 0; i < numberOfMembInDatabase; i++) {
       if(jsonDATA[i]){
           dfg=jsonDATA[i]["IdentityCode"];
           //console.log(dfg);
           var tbody=document.createElement("tbody");
           tbody.id=`${jsonDATA[i]["FullName"]}`;
           tbody.innerHTML=`
           <tr>
              <td style="padding: 20px 15px;text-align: center;font-size: 20px;">${a}</td>
              <td style="padding: 20px 15px;text-align: center;font-size: 20px;">${jsonDATA[i]["FullName"]}</td>
              <td style="padding: 20px 15px;text-align: center;font-size: 20px;">${jsonDATA[i]["IdentityCode"]}</td>
              <td style="padding: 20px 15px;text-align: center;font-size: 20px;">${jsonDATA[i]["Subject"]}</td>
              <td style="padding: 20px 15px;text-align: center;font-size: 20px;">
                <span class="action_btn">
                   <a onclick="viewMember('${dfg}')" >View </a>
                   <a onclick="editMember('${dfg}')" >Edit</a>
                   <a onclick="deleteMember('${dfg}')" class="deleteValues" id=${dfg}>Delete </a>
                  
                </span>
              </td>
             </tr>`;
            table.appendChild(tbody);
        a++;
    }
    
   } 


}

function makeClasses(){
    closeOrgDtaPage();
    let body=document.getElementById("body");
    
    let makecla=document.createElement("div");
    makecla.id="makecla";
    
    makecla.style="width:70%;height:70%;background-color:honeydew;position:absolute;top:20%;left:20%;";
    
    makecla.innerHTML=`<h3 style="font-size:25px;font-family:tahoma;text-align:center;margin:auto; text-decoration:underline;"> Make Your Classes</h3>
    
    <h3 style="font-size:25px;font-family:tahoma;text-align:right;margin:auto; position:absolute;top:0;right:0;color:red;font-weight:600; cursor:pointer;" onclick="closeMakeClasses()">x</h3>
    
     <button style="font-size:25px;background-color:black;color:honeydew;border:none;cursor:pointer; position: absolute;top: 10%;
  left: 50%;" onclick="createNewClasses()">Create Classes</button> 
  
  <div id="arethereclasses" style="font-size:25px;color:black; text-align:center; margin-top:200px;">No Classes Available</div>
  `;
    
    
    body.appendChild(makecla);
    
    
}

function closeMakeClasses(){
    let sxc=document.getElementById("makecla");
    sxc.parentNode.removeChild(sxc);
}


function createNewClasses(){
    let classtemp=document.getElementById("makecla");
    classtemp.innerHTML=`<h3 style="font-size:25px;font-family:tahoma;text-align:center;margin:auto;"> Make Your Classes</h3>
    <h4 style="font-size:25px; text-align:center;">How Many Classes Do you Want To Make ?</h4>
    <div style="margin:auto; width:100%;">
    <h3 style='text-align:center;'>
    <input type="number" placeholder="Number Of Classes" style="font-size:22px; text-align:center;margin:auto;"></div>
    </h3>
    <button style="font-size:25px;background-color:blue;color:honeydew;border:none;cursor:pointer; position: absolute;bottom:10%;
    right: 0;">Continue</button>
    `;
    
    
}




</script>