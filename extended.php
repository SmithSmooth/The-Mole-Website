
<script type="text/javascript">
function closeView(){
    let jop=document.getElementById("opp");
    jop.parentNode.removeChild(jop);
}

function  viewMember(ab){
    let cv=jsonData["Organisation' Unique code"];
    var numberOfMembInDatabase=1000;

    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
            if(cv == jsonDATA[i]["SchoolCode"] && ab == jsonDATA[i]["IdentityCode"]){
            //console.log(jsonDATA[i]["IdentityCode"],ab);
            let opp=document.createElement("div");
            opp.innerHTML=`<div style="display:flex; width:100%;"><h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Veiw Member's Data </h2><div style="font-size:20px; color:red;" onclick="closeView()">Close</div> </div>
            <div style="display:flex; width:100%;"><h3 style="color:black; font-size:30px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Full Name : </span>${jsonDATA[i]["FullName"]}</h3></div>
            <div style="display:flex; width:100%;"><h3 style="color:black; font-size:30px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Identification Code : </span>${jsonDATA[i]["IdentityCode"]}</h3></div>
            <div style="display:flex; width:100%;"><h3 style="color:black; font-size:30px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Subject ('s) Taught : </span>${jsonDATA[i]["Subject"]}</h3></div>
            `;
            opp.id="opp";

            
            //when you split a string , the end result is an array
          // Monday Data
            let jkl , jhg,ik;
            let rg=jsonDATA[i]["MondaySubject"];
            jkl=rg.split(",");
            jhg=jkl.length;
            ik="";
            
            if(jhg == 3){
                let jkl2=jkl[2].replace('[','');
                let jkl2Ad=jkl2.replace(']','');

                let jkl1=jkl[1].replace('[','');
                let jkl1Ad=jkl1.replace(']','');

                let jkl0=jkl[0].replace('[','');
                let jkl0Ad=jkl0.replace(']','');

                    
                ik+= jkl2Ad + "Lesson In "+jkl1Ad+" At " + jkl0Ad ;

                opp.innerHTML+=`<h2 style=" margin:auto; color:black; margin-bottom:10px; text-decoration:underline">Lessons</h2>
              <div style="display:flex; width :100%;"> <h3 style=" color:black; font-size:25px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Monday : </span> ${ik} </h3></div>`;
 
                   
            }else if(jhg == 6) {
                let gb1= jkl[4]+" Lesson In "+ jkl[2]+" At "+jkl[0];
                let gb2=jkl[5]+" Lesson In "+ jkl[3]+" At "+jkl[1];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');

                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                </div>`;

            }else if(jhg == 9){
                let gb1=jkl[6]+" Lesson In "+ jkl[3]+" At "+jkl[0];
                let gb2=jkl[7]+" Lesson In "+ jkl[4]+" At "+jkl[1];
                let gb3=jkl[8]+" Lesson In "+ jkl[5]+" At "+jkl[2];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                </div>`;
            }else if(jhg == 12){
                let gb1=jkl[8]+" Lesson In "+ jkl[4]+" At "+jkl[0];
                let gb2=jkl[9]+" Lesson In "+ jkl[5]+" At "+jkl[1];
                let gb3=jkl[10]+" Lesson In "+ jkl[6]+" At "+jkl[2];
                let gb4=jkl[11]+" Lesson In "+ jkl[7]+" At "+jkl[3];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                </div>`;
            }else if(jhg == 15){
                let gb1=jkl[10]+" Lesson In "+ jkl[5]+" At "+jkl[0];
                let gb2=jkl[11]+" Lesson In "+ jkl[6]+" At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[7]+" At "+jkl[2];
                let gb4=jkl[13]+" Lesson In "+ jkl[8]+" At "+jkl[3];
                let gb5=jkl[14]+" Lesson In "+ jkl[9]+" At "+jkl[4];

                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                </div>`;
            }else if(jhg == 18){
                let gb1=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[0];
                let gb2=jkl[13]+" Lesson In "+ jkl[7]+" At "+jkl[1];
                let gb3=jkl[14]+" Lesson In "+ jkl[8]+" At "+jkl[2];
                let gb4=jkl[15]+" Lesson In "+ jkl[9]+" At "+jkl[3];
                let gb5=jkl[16]+" Lesson In "+ jkl[10]+" At "+jkl[4];
                let gb6=jkl[17]+" Lesson In "+ jkl[11]+" At "+jkl[5];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                 //conqole,log(gb1Cd3, \n",gb2Cd3, \n".gb3Cd3);

               opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                </div>`
            }else if(jhg == 21){
                let gb1=jkl[14]+" Lesson In "+ jkl[7]+" At "+jkl[0];
                let gb2=jkl[15]+" Lesson In "+ jkl[8]+" At "+jkl[1];
                let gb3=jkl[16]+" Lesson In "+ jkl[9]+" At "+jkl[2];
                let gb4=jkl[17]+" Lesson In "+ jkl[10]+" At "+jkl[3];
                let gb5=jkl[18]+" Lesson In "+ jkl[11]+" At "+jkl[4];
                let gb6=jkl[19]+" Lesson In "+ jkl[12]+" At "+jkl[5];
                let gb7=jkl[20]+" Lesson In "+ jkl[13]+" At "+jkl[6];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                </div>`;
            }else if(jhg == 24){
                let gb1=jkl[16]+" Lesson In "+ jkl[8]+" At "+jkl[0];
                let gb2=jkl[17]+" Lesson In "+ jkl[9]+" At "+jkl[1];
                let gb3=jkl[18]+" Lesson In "+ jkl[10]+" At "+jkl[2];
                let gb4=jkl[19]+" Lesson In "+ jkl[11]+" At "+jkl[3];
                let gb5=jkl[20]+" Lesson In "+ jkl[12]+"At "+jkl[4];
                let gb6=jkl[21]+" Lesson In "+ jkl[13]+" At "+jkl[5];
                let gb7=jkl[22]+" Lesson In "+ jkl[14]+" At "+jkl[6];
                let gb8=jkl[23]+" Lesson In "+ jkl[15]+" At "+jkl[7];
              
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                </div>`;
            }else if(jhg == 27){
                let gb1=jkl[18]+" Lesson In "+ jkl[9]+" At "+jkl[0];
                let gb2=jkl[19]+" Lesson In "+ jkl[10]+" At "+jkl[1];
                let gb3=jkl[20]+" Lesson In "+ jkl[11]+" At "+jkl[2];
                let gb4=jkl[21]+" Lesson In "+ jkl[12]+" At "+jkl[3];
                let gb5=jkl[22]+" Lesson In "+ jkl[13]+" At "+jkl[4];
                let gb6=jkl[23]+" Lesson In "+ jkl[14]+" At "+jkl[5];
                let gb7=jkl[24]+" Lesson In "+ jkl[15]+" At "+jkl[6];
                let gb8=jkl[25]+" Lesson In "+ jkl[16]+" At "+jkl[7];
                let gb9=jkl[26]+" Lesson In "+ jkl[17]+" At "+jkl[8];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                </div>`;
            }else if(jhg == 30){
                let gb1=jkl[20]+" Lesson In "+ jkl[10]+" At "+jkl[0];
                let gb2=jkl[21]+" Lesson In "+ jkl[11]+" At "+jkl[1];
                let gb3=jkl[22]+" Lesson In "+ jkl[12]+" At "+jkl[2];
                let gb4=jkl[23]+" Lesson In "+ jkl[13]+" At "+jkl[3];
                let gb5=jkl[24]+" Lesson In "+ jkl[14]+" At "+jkl[4];
                let gb6=jkl[25]+" Lesson In "+ jkl[15]+" At "+jkl[5];
                let gb7=jkl[26]+" Lesson In "+ jkl[16]+" At "+jkl[6];
                let gb8=jkl[27]+" Lesson In "+ jkl[17]+" At "+jkl[7];
                let gb9=jkl[28]+" Lesson In "+ jkl[18]+" At "+jkl[8];
                let gb10=jkl[29]+" Lesson In "+ jkl[19]+" At "+jkl[9];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                </div>`;
            }else if(jhg == 33){
                let gb1=jkl[22]+" Lesson In "+ jkl[11]+" At "+jkl[0];
                let gb2=jkl[23]+" Lesson In "+ jkl[12]+" At "+jkl[1];
                let gb3=jkl[24]+" Lesson In "+ jkl[13]+" At "+jkl[2];
                let gb4=jkl[25]+" Lesson In "+ jkl[14]+" At "+jkl[3];
                let gb5=jkl[26]+" Lesson In "+ jkl[15]+" At "+jkl[4];
                let gb6=jkl[27]+" Lesson In "+ jkl[16]+" At "+jkl[5];
                let gb7=jkl[28]+" Lesson In "+ jkl[17]+" At "+jkl[6];
                let gb8=jkl[29]+" Lesson In "+ jkl[18]+" At "+jkl[7];
                let gb9=jkl[30]+" Lesson In "+ jkl[19]+" At "+jkl[8];
                let gb10=jkl[31]+" Lesson In "+ jkl[20]+" At "+jkl[9];
                let gb11=jkl[32]+" Lesson In "+ jkl[21]+" At "+jkl[10];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                //co sole.lo (gb1Ad3 "\n ,gb Ad3,"\n ,gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">11 : ${gb11Ad3}</span>
                </div>`;
            }else if(jhg == 36){
                let gb1=jkl[24]+" Lesson In "+ jkl[12]+" At "+jkl[0];
                let gb2=jkl[25]+" Lesson In "+ jkl[13]+" At "+jkl[1];
                let gb3=jkl[26]+" Lesson In "+ jkl[14]+" At "+jkl[2];
                let gb4=jkl[27]+" Lesson In "+ jkl[15]+" At "+jkl[3];
                let gb5=jkl[28]+" Lesson In "+ jkl[16]+" At "+jkl[4];
                let gb6=jkl[29]+" Lesson In "+ jkl[17]+" At "+jkl[5];
                let gb7=jkl[30]+" Lesson In "+ jkl[18]+" At "+jkl[6];
                let gb8=jkl[31]+" Lesson In "+ jkl[19]+" At "+jkl[7];
                let gb9=jkl[32]+" Lesson In "+ jkl[20]+" At "+jkl[8];
                let gb10=jkl[33]+" Lesson In "+ jkl[21]+" At "+jkl[9];
                let gb11=jkl[34]+" Lesson In "+ jkl[22]+" At "+jkl[10];
                let gb12=jkl[35]+" Lesson In "+ jkl[23]+" At "+jkl[11];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');
                let gb12Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');
                let gb12Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                let gb12Ad3=gb12Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Monday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb11Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb12Ad3}</span>
                </div>`;
            }


          //Tuesday data 
            let rgT=jsonDATA[i]["TuesdaySubject"];
            jkl=rgT.split(",");
            jhg=jkl.length;
            ik="";

            if(jhg == 3){
                let jkl2=jkl[2].replace('[','');
                let jkl2Ad=jkl2.replace(']','');

                let jkl1=jkl[1].replace('[','');
                let jkl1Ad=jkl1.replace(']','');

                let jkl0=jkl[0].replace('[','');
                let jkl0Ad=jkl0.replace(']','');

                    
                ik+= jkl2Ad +" Lesson In "+jkl1Ad+" At "+jkl0Ad+" .";

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:flex; width:100%;"><h3 style="color:black; font-size:25px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Tuesday : </span>${ik}</h3></div>`;

                   
            }else if(jhg == 6){
                let gb1=jkl[4]+" Lesson In "+ jkl[2]+" At "+jkl[0];
                let gb2=jkl[5]+" Lesson In "+ jkl[3]+" At "+jkl[1];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');

                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                </div>`

            }else if (jhg == 9){
                 let gb1=jkl[6]+" Lesson In "+ jkl[3]+" At "+jkl[0];
                let gb2=jkl[7]+" Lesson In "+ jkl[4]+" At "+jkl[1];
                let gb3=jkl[8]+" Lesson In "+ jkl[5]+" At "+jkl[2];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                </div>`;
            }else if(jhg == 12){
                let gb1=jkl[8]+" Lesson In "+ jkl[4]+" At "+jkl[0];
                let gb2=jkl[9]+" Lesson In "+ jkl[5]+" At "+jkl[1];
                let gb3=jkl[10]+" Lesson In "+ jkl[6]+" At "+jkl[2];
                let gb4=jkl[11]+" Lesson In "+ jkl[7]+" At "+jkl[3];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                </div>`;
            }else if(jhg == 15){
                let gb1=jkl[10]+" Lesson In "+ jkl[5]+" At "+jkl[0];
                let gb2=jkl[11]+" Lesson In "+ jkl[6]+" At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[7]+" At "+jkl[2];
                let gb4=jkl[13]+" Lesson In "+ jkl[8]+" At "+jkl[3];
                let gb5=jkl[14]+" Lesson In "+ jkl[9]+" At "+jkl[4];

                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                </div>`;
            }else if(jhg == 18){
                let gb1=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[0];
                let gb2=jkl[13]+" Lesson In "+ jkl[7]+" At "+jkl[1];
                let gb3=jkl[14]+" Lesson In "+ jkl[8]+" At "+jkl[2];
                let gb4=jkl[15]+" Lesson In "+ jkl[9]+" At "+jkl[3];
                let gb5=jkl[16]+" Lesson In "+ jkl[10]+" At "+jkl[4];
                let gb6=jkl[17]+" Lesson In "+ jkl[11]+" At "+jkl[5];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                </div>`;
            }else if(jhg == 23){
                let gb1=jkl[14] +" Lesson In "+ jkl[7]+" At " +jkl[0];
                let gb2=jkl[15]+ " Lesson In " + jkl[8]+" At " +jkl[1];
                let gb3=jkl[16]+" Lesson In "+ jkl [9]+" At "+jkl[2];
                let gb4=jkl[17]+" Lesson In "+ jkl[10]+" At "+jkl[3];
                let gb5=jkl[18]+" Lesson In " +jkl[11] +" At "+jkl[4];
                let gb6=jkl[19]+" Lesson In  "+ jkl[12]+" At "+jkl[5];
                let gb7=jkl[20]+" Lesson In "+ jkl[13]+" At "+jkl[6];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                </div>`;
            }else if(jhg == 24){
                let gb1=jkl[16]+" Lesson In "+ jkl[8]+" At "+jkl[0];
                let gb2=jkl[17]+" Lesson In "+ jkl[9]+" At "+jkl[1];
                let gb3=jkl[18]+" Lesson In "+ jkl[10]+" At "+jkl[2];
                let gb4=jkl[19]+" Lesson In "+ jkl[11]+" At "+jkl[3];
                let gb5=jkl[20]+" Lesson In "+ jkl[12]+" At "+jkl[4];
                let gb6=jkl[21]+" Lesson In "+ jkl[13]+" At "+jkl[5];
                let gb7=jkl[22]+" Lesson In "+ jkl[14]+" At "+jkl[6];
                let gb8=jkl[23]+" Lesson In "+ jkl[15]+" At "+jkl[7];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                </div>`;
            }else if(jhg == 27){
                let gb1=jkl[18]+" Lesson In "+ jkl[9]+" At "+jkl[0];
                let gb2=jkl[19]+" Lesson In "+ jkl[10]+" At "+jkl[1];
                let gb3=jkl[20]+" Lesson In "+ jkl[11]+" At "+jkl[2];
                let gb4=jkl[21]+" Lesson In "+ jkl[12]+" At "+jkl[3];
                let gb5=jkl[22]+" Lesson In "+ jkl[13]+" At "+jkl[4];
                let gb6=jkl[23]+" Lesson In "+ jkl[14]+" At "+jkl[5];
                let gb7=jkl[24]+" Lesson In "+ jkl[15]+" At "+jkl[6];
                let gb8=jkl[25]+" Lesson In "+ jkl[16]+" At "+jkl[7];
                let gb9=jkl[26]+" Lesson In "+ jkl[17]+" At "+jkl[8];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                </div>`;
            }else if(jhg == 30){
                let gb1=jkl[20]+" Lesson In "+ jkl[10]+" At "+jkl[0];
                let gb2=jkl[21]+" Lesson In "+ jkl[11]+" At "+jkl[1];
                let gb3=jkl[22]+" Lesson In "+ jkl[12]+" At "+jkl[2];
                let gb4=jkl[23]+" Lesson In "+ jkl[13]+" At "+jkl[3];
                let gb5=jkl[24]+" Lesson In "+ jkl[14]+" At "+jkl[4];
                let gb6=jkl[25]+" Lesson In "+ jkl[15]+" At "+jkl[5];
                let gb7=jkl[26]+" Lesson In "+ jkl[16]+" At "+jkl[6];
                let gb8=jkl[27]+" Lesson In "+ jkl[17]+" At "+jkl[7];
                let gb9=jkl[28]+" Lesson In "+ jkl[18]+" At "+jkl[8];
                let gb10=jkl[29]+" Lesson In "+ jkl[19]+" At "+jkl[9];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                </div>`;
            }else if(jhg == 33){
                let gb1=jkl[22]+" Lesson In "+ jkl[11]+" At "+jkl[0];
                let gb2=jkl[23]+" Lesson In "+ jkl[12]+" At "+jkl[1];
                let gb3=jkl[24]+" Lesson In "+ jkl[13]+" At "+jkl[2];
                let gb4=jkl[25]+" Lesson In "+ jkl[14]+" At "+jkl[3];
                let gb5=jkl[26]+" Lesson In "+ jkl[15]+" At "+jkl[4];
                let gb6=jkl[27]+" Lesson In "+ jkl[16]+" At "+jkl[5];
                let gb7=jkl[28]+" Lesson In "+ jkl[17]+" At "+jkl[6];
                let gb8=jkl[29]+" Lesson In "+ jkl[18]+" At "+jkl[7];
                let gb9=jkl[30]+" Lesson In "+ jkl[19]+" At "+jkl[8];
                let gb10=jkl[31]+" Lesson In "+ jkl[20]+" At "+jkl[9];
                let gb11=jkl[32]+" Lesson In "+ jkl[21]+" At "+jkl[10];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">11 : ${gb11Ad3}</span>
                </div>`;
            }else if(jhg == 36){
                let gb1=jkl[24]+" Lesson In "+ jkl[12]+" At "+jkl[0];
                let gb2=jkl[25]+" Lesson In "+ jkl[13]+" At "+jkl[1];
                let gb3=jkl[26]+" Lesson In "+ jkl[14]+" At "+jkl[2];
                let gb4=jkl[27]+" Lesson In "+ jkl[15]+" At "+jkl[3];
                let gb5=jkl[28]+" Lesson In "+ jkl[16]+" At "+jkl[4];
                let gb6=jkl[29]+" Lesson In "+ jkl[17]+" At "+jkl[5];
                let gb7=jkl[30]+" Lesson In "+ jkl[18]+" At "+jkl[6];
                let gb8=jkl[31]+" Lesson In "+ jkl[19]+" At "+jkl[7];
                let gb9=jkl[32]+" Lesson In "+ jkl[20]+" At "+jkl[8];
                let gb10=jkl[33]+" Lesson In "+ jkl[21]+" At "+jkl[9];
                let gb11=jkl[34]+" Lesson In "+ jkl[22]+" At "+jkl[10];
                let gb12=jkl[35]+" Lesson In "+ jkl[23]+" At "+jkl[11];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');
                let gb12Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');
                let gb12Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                let gb12Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Tuesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb11Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb12Ad3}</span>
                </div>`;
            }


          //Wenesday Data data 
            let rgW=jsonDATA[i]["WenSubject"];
            jkl=rgW.split(",");
            jhg=jkl.length;
            ik="";

            if(jhg == 3){
                let jkl2=jkl[2].replace('[','');
                let jkl2Ad=jkl2.replace(']','');

                let jkl1=jkl[1].replace('[','');
                let jkl1Ad=jkl1.replace(']','');

                let jkl0=jkl[0].replace('[','');
                let jkl0Ad=jkl0.replace(']','');

                    
                ik+= jkl2Ad +" Lesson In "+jkl1Ad+" At "+jkl0Ad+" .";

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:flex; width:100%;"><h3 style="color:black; font-size:25px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Wednesday : </span>${ik}</h3></div>`;

                   
            }else if(jhg == 6){
                let gb1=jkl[4]+" Lesson In "+ jkl[2]+" At "+jkl[0];
                let gb2=jkl[5]+" Lesson In "+ jkl[3]+" At "+jkl[1];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');

                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                </div>`;

            }else if(jhg == 9){
                let gb1=jkl[6]+" Lesson In "+ jkl[3]+" At "+jkl[0];
                let gb2=jkl[7]+" Lesson In "+ jkl[4]+" At "+jkl[1];
                let gb3=jkl[8]+" Lesson In "+ jkl[5]+" At "+jkl[2];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                </div>`;
            }else if(jhg == 12){
                let gb1=jkl[8]+" Lesson In "+ jkl[4]+" At "+jkl[0];
                let gb2=jkl[9]+" Lesson In "+ jkl[5]+" At "+jkl[1];
                let gb3=jkl[10]+" Lesson In "+ jkl[6]+" At "+jkl[2];
                let gb4=jkl[11]+" Lesson In "+ jkl[7]+" At "+jkl[3];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                </div>`;
            }else if(jhg == 15){
                let gb1=jkl[10]+" Lesson In "+ jkl[5]+" At "+jkl[0];
                let gb2=jkl[11]+" Lesson In "+ jkl[6]+" At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[7]+" At "+jkl[2];
                let gb4=jkl[13]+" Lesson In "+ jkl[8]+" At "+jkl[3];
                let gb5=jkl[14]+" Lesson In "+ jkl[9]+" At "+jkl[4];

                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                </div>`;
            }else if(jhg == 18){
                let gb1=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[0];
                let gb2=jkl[13]+" Lesson In "+ jkl[7]+" At "+jkl[1];
                let gb3=jkl[14]+" Lesson In "+ jkl[8]+" At "+jkl[2];
                let gb4=jkl[15]+" Lesson In "+ jkl[9]+" At "+jkl[3];
                let gb5=jkl[16]+" Lesson In "+ jkl[10]+" At "+jkl[4];
                let gb6=jkl[17]+" Lesson In "+ jkl[11]+" At "+jkl[5];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                </div>`;
            }else if(jhg == 21){
                let gb1=jkl[14]+" Lesson In "+ jkl[7]+" At "+jkl[0];
                let gb2=jkl[15]+" Lesson In "+ jkl[8]+" At "+jkl[1];
                let gb3=jkl[16]+" Lesson In "+ jkl[9]+" At "+jkl[2];
                let gb4=jkl[17]+" Lesson In "+ jkl[10]+" At "+jkl[3];
                let gb5=jkl[18]+" Lesson In "+ jkl[11]+" At "+jkl[4];
                let gb6=jkl[19]+" Lesson In "+ jkl[12]+" At "+jkl[5];
                let gb7=jkl[20]+" Lesson In "+ jkl[13]+" At "+jkl[6];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                </div>`;
            }else if(jhg == 24){
                let gb1=jkl[16]+" Lesson In "+ jkl[8]+" At "+jkl[0];
                let gb2=jkl[17]+" Lesson In "+ jkl[9]+" At "+jkl[1];
                let gb3=jkl[18]+" Lesson In "+ jkl[10]+" At "+jkl[2];
                let gb4=jkl[19]+" Lesson In "+ jkl[11]+" At "+jkl[3];
                let gb5=jkl[20]+" Lesson In "+ jkl[12]+" At "+jkl[4];
                let gb6=jkl[21]+" Lesson In "+ jkl[13]+" At "+jkl[5];
                let gb7=jkl[22]+" Lesson In "+ jkl[14]+" At "+jkl[6];
                let gb8=jkl[23]+" Lesson In "+ jkl[15]+" At "+jkl[7];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                </div>`;
            }else if(jhg == 27){
                let gb1=jkl[18]+" Lesson In "+ jkl[9]+" At "+jkl[0];
                let gb2=jkl[19]+" Lesson In "+ jkl[10]+" At "+jkl[1];
                let gb3=jkl[20]+" Lesson In "+ jkl[11]+" At "+jkl[2];
                let gb4=jkl[21]+" Lesson In "+ jkl[12]+" At "+jkl[3];
                let gb5=jkl[22]+" Lesson In "+ jkl[13]+" At "+jkl[4];
                let gb6=jkl[23]+" Lesson In "+ jkl[14]+" At "+jkl[5];
                let gb7=jkl[24]+" Lesson In "+ jkl[15]+" At "+jkl[6];
                let gb8=jkl[25]+" Lesson In "+ jkl[16]+" At "+jkl[7];
                let gb9=jkl[26]+" Lesson In "+ jkl[17]+" At "+jkl[8];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                </div>`;
            }else if(jhg == 30){
                let gb1=jkl[20]+" Lesson In "+ jkl[10]+" At "+jkl[0];
                let gb2=jkl[21]+" Lesson In "+ jkl[11]+" At "+jkl[1];
                let gb3=jkl[22]+" Lesson In "+ jkl[12]+" At "+jkl[2];
                let gb4=jkl[23]+" Lesson In "+ jkl[13]+" At "+jkl[3];
                let gb5=jkl[24]+" Lesson In "+ jkl[14]+" At "+jkl[4];
                let gb6=jkl[25]+" Lesson In "+ jkl[15]+" At "+jkl[5];
                let gb7=jkl[26]+" Lesson In "+ jkl[16]+" At "+jkl[6];
                let gb8=jkl[27]+" Lesson In "+ jkl[17]+" At "+jkl[7];
                let gb9=jkl[28]+" Lesson In "+ jkl[18]+" At "+jkl[8];
                let gb10=jkl[29]+" Lesson In "+ jkl[19]+" At "+jkl[9];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                </div>`;
            }else if(jhg == 33){
                let gb1=jkl[22]+" Lesson In "+ jkl[11]+" At "+jkl[0];
                let gb2=jkl[23]+" Lesson In "+ jkl[12]+" At "+jkl[1];
                let gb3=jkl[24]+" Lesson In "+ jkl[13]+" At "+jkl[2];
                let gb4=jkl[25]+" Lesson In "+ jkl[14]+" At "+jkl[3];
                let gb5=jkl[26]+" Lesson In "+ jkl[15]+" At "+jkl[4];
                let gb6=jkl[27]+" Lesson In "+ jkl[16]+" At "+jkl[5];
                let gb7=jkl[28]+" Lesson In "+ jkl[17]+" At "+jkl[6];
                let gb8=jkl[29]+" Lesson In "+ jkl[18]+" At "+jkl[7];
                let gb9=jkl[30]+" Lesson In "+ jkl[19]+" At "+jkl[8];
                let gb10=jkl[31]+" Lesson In "+ jkl[20]+" At "+jkl[9];
                let gb11=jkl[32]+" Lesson In "+ jkl[21]+" At "+jkl[10];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">11 : ${gb11Ad3}</span>
                </div>`;
            }else if(jhg == 36){
                let gb1=jkl[24]+" Lesson In "+ jkl[12]+ " At "+jkl[0];
                let gb2=jkl[25]+" Lesson In "+ jkl[13]+" At "+jkl[1];
                let gb3=jkl[26]+" Lesson In "+ jkl[14] +" At "+jkl[2];
                let gb4=jkl[27]+" Lesson In "+ jkl[15]+" At  "+jkl[3];
                let gb5=jkl[28]+" Lesson  In "+ jkl[16]+" At "+jkl[4];
                let gb6=jkl[29]+" Lesson In "+ jkl[17]+" At "+jkl[5];
                let gb7=jkl[30]+" Lesson In "+ jkl[18]+" At "+jkl[6];
                let gb8=jkl[31]+" Lesson In "+ jkl[19]+" At "+jkl[7];
                let gb9=jkl[32]+" Lesson In "+ jkl[20]+" At "+jkl[8];
                let gb10=jkl[33]+" Lesson In "+ jkl[21]+" At "+jkl[9];
                let gb11=jkl[34]+" Lesson In "+ jkl[22]+" At "+jkl[10];
                let gb12=jkl[35]+" Lesson In "+ jkl[23]+" At "+jkl[11];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');
                let gb12Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');
                let gb12Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                let gb12Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Wednesday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">11 : ${gb11Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">12 : ${gb12Ad3}</span>
                </div>`;
            }


          //Thursday Data  
            let rgTH=jsonDATA[i]["ThursdaySubject"];
            jkl=rgTH.split(",");
            jhg=jkl.length;
            ik="";

            if(jhg == 3){
                let jkl2=jkl[2].replace('[','');
                let jkl2Ad=jkl2.replace(']','');

                let jkl1=jkl[1].replace('[','');
                let jkl1Ad=jkl1.replace(']','');

                let jkl0=jkl[0].replace('[','');
                let jkl0Ad=jkl0.replace(']','');

                    
                ik+= jkl2Ad +" Lesson In "+jkl1Ad+" At "+jkl0Ad+" .";

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:flex; width:100%;"><h3 style="color:black; font-size:25px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Thursday : </span>${ik}</h3></div>`;

                   
            }else if(jhg == 6){
                let gb1=jkl[4]+" Lesson In "+ jkl[2]+" At "+jkl[0];
                let gb2=jkl[5]+" Lesson In "+ jkl[3]+" At "+jkl[1];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');

                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                </div>`;

            }else if(jhg == 9){
                let gb1=jkl[6]+" Lesson In "+ jkl[3]+" At "+jkl[0];
                let gb2=jkl[7]+" Lesson In "+ jkl[4]+" At "+jkl[1];
                let gb3=jkl[8]+" Lesson In "+ jkl[5]+" At "+jkl[2];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                </div>`;
            }else if(jhg == 12){
                let gb1=jkl[8]+" Lesson In " + jkl[4]+" At "+jkl[0];
                let gb2=jkl[9]+" Lesson In "+ jkl[5]+"At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[2];
                let gb4=jkl[11]+" Lesson In"+ jkl[7]+ " At "+jkl[3];
                 
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                </div>`;
            }else if(jhg == 15){
                let gb1=jkl[10]+" Lesson In "+ jkl[5]+" At "+jkl[0];
                let gb2=jkl[11]+" Lesson In "+ jkl[6]+" At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[7]+" At "+jkl[2];
                let gb4=jkl[13]+" Lesson In "+ jkl[8]+" At "+jkl[3];
                let gb5=jkl[14]+" Lesson In "+ jkl[9]+" At "+jkl[4];

                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                </div>`;
            }else if(jhg == 18){
                let gb1=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[0];
                let gb2=jkl[13]+" Lesson In "+ jkl[7]+" At "+jkl[1];
                let gb3=jkl[14]+" Lesson In "+ jkl[8]+" At "+jkl[2];
                let gb4=jkl[15]+" Lesson In "+ jkl[9]+" At "+jkl[3];
                let gb5=jkl[16]+" Lesson In "+ jkl[10]+" At "+jkl[4];
                let gb6=jkl[17]+" Lesson In "+ jkl[11]+" At "+jkl[5];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                </div>`;
            }else if(jhg == 21){
                let gb1=jkl[14]+" Lesson In "+ jkl[7]+" At "+jkl[0];
                let gb2=jkl[15]+" Lesson In "+ jkl[8]+" At "+jkl[1];
                let gb3=jkl[16]+" Lesson In "+ jkl[9]+" At "+jkl[2];
                let gb4=jkl[17]+" Lesson In "+ jkl[10]+" At "+jkl[3];
                let gb5=jkl[18]+" Lesson In "+ jkl[11]+" At "+jkl[4];
                let gb6=jkl[19]+" Lesson In "+ jkl[12]+" At "+jkl[5];
                let gb7=jkl[20]+" Lesson In "+ jkl[13]+" At "+jkl[6];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                </div>`;
            }else if(jhg == 24){
                let gb1=jkl[16]+" Lesson In "+ jkl[8]+" At "+jkl[0];
                let gb2=jkl[17]+" Lesson In "+ jkl[9]+" At "+jkl[1];
                let gb3=jkl[18]+" Lesson In "+ jkl[10]+" At "+jkl[2];
                let gb4=jkl[19]+" Lesson In "+ jkl[11]+" At "+jkl[3];
                let gb5=jkl[20]+" Lesson In "+ jkl[12]+" At "+jkl[4];
                let gb6=jkl[21]+" Lesson In "+ jkl[13]+" At "+jkl[5];
                let gb7=jkl[22]+" Lesson In "+ jkl[14]+" At "+jkl[6];
                let gb8=jkl[23]+" Lesson In "+ jkl[15]+" At "+jkl[7];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                </div>`;
            }else if(jhg == 27){
                let gb1=jkl[18]+" Lesson In "+ jkl[9]+" At "+jkl[0];
                let gb2=jkl[19]+" Lesson In "+ jkl[10]+" At "+jkl[1];
                let gb3=jkl[20]+" Lesson In "+ jkl[11]+" At "+jkl[2];
                let gb4=jkl[21]+" Lesson In "+ jkl[12]+" At "+jkl[3];
                let gb5=jkl[22]+" Lesson In "+ jkl[13]+" At "+jkl[4];
                let gb6=jkl[23]+" Lesson In "+ jkl[14]+" At "+jkl[5];
                let gb7=jkl[24]+" Lesson In "+ jkl[15]+" At "+jkl[6];
                let gb8=jkl[25]+" Lesson In "+ jkl[16]+" At "+jkl[7];
                let gb9=jkl[26]+" Lesson In "+ jkl[17]+" At "+jkl[8];

                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                </div>`;
            }else if(jhg == 30){
                let gb1=jkl[20]+" Lesson In "+ jkl[10]+" At "+jkl[0];
                let gb2=jkl[21]+" Lesson In "+ jkl[11]+" At "+jkl[1];
                let gb3=jkl[22]+" Lesson In "+ jkl[12]+" At "+jkl[2];
                let gb4=jkl[23]+" Lesson In "+ jkl[13]+" At "+jkl[3];
                let gb5=jkl[24]+" Lesson In "+ jkl[14]+" At "+jkl[4];
                let gb6=jkl[25]+" Lesson In "+ jkl[15]+" At "+jkl[5];
                let gb7=jkl[26]+" Lesson In "+ jkl[16]+" At "+jkl[6];
                let gb8=jkl[27]+" Lesson In "+ jkl[17]+" At "+jkl[7];
                let gb9=jkl[28]+" Lesson In "+ jkl[18]+" At "+jkl[8];
                let gb10=jkl[29]+" Lesson In "+ jkl[19]+" At "+jkl[9];

                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');


                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                </div>`;
            }else if(jhg == 33){
                let gb1=jkl[22]+" Lesson In "+ jkl[11]+" At "+jkl[0];
                let gb2=jkl[23]+" Lesson In "+ jkl[12]+" At "+jkl[1];
                let gb3=jkl[24]+" Lesson In "+ jkl[13]+" At "+jkl[2];
                let gb4=jkl[25]+" Lesson In "+ jkl[14]+" At "+jkl[3];
                let gb5=jkl[26]+" Lesson In "+ jkl[15]+" At "+jkl[4];
                let gb6=jkl[27]+" Lesson In "+ jkl[16]+" At "+jkl[5];
                let gb7=jkl[28]+" Lesson In "+ jkl[17]+" At "+jkl[6];
                let gb8=jkl[29]+" Lesson In "+ jkl[18]+" At "+jkl[7];
                let gb9=jkl[30]+" Lesson In "+ jkl[19]+" At "+jkl[8];
                let gb10=jkl[31]+" Lesson In "+ jkl[20]+" At "+jkl[9];
                let gb11=jkl[32]+" Lesson In "+ jkl[21]+" At "+jkl[10];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb11Ad3}</span>
                </div>`;
            }else if(jhg == 36){
                let gb1=jkl[24]+" Lesson In "+ jkl[12]+" At "+jkl[0];
                let gb2=jkl[25]+" Lesson In "+ jkl[13]+" At "+jkl[1];
                let gb3=jkl[26]+" Lesson In "+ jkl[14]+" At "+jkl[2];
                let gb4=jkl[27]+" Lesson In "+ jkl[15]+" At "+jkl[3];
                let gb5=jkl[28]+" Lesson In "+ jkl[16]+" At "+jkl[4];
                let gb6=jkl[29]+" Lesson In "+ jkl[17]+" At "+jkl[5];
                let gb7=jkl[30]+" Lesson In "+ jkl[18]+" At "+jkl[6];
                let gb8=jkl[31]+" Lesson In "+ jkl[19]+" At "+jkl[7];
                let gb9=jkl[32]+" Lesson In "+ jkl[20]+" At "+jkl[8];
                let gb10=jkl[33]+" Lesson In "+ jkl[21]+" At "+jkl[9];
                let gb11=jkl[34]+" Lesson In "+ jkl[22]+" At "+jkl[10];
                let gb12=jkl[35]+" Lesson In "+ jkl[23]+" At "+jkl[11];
            
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');
                let gb12Ad1=gb12.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');
                let gb12Ad2=gb12Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                let gb12Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Thursday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">11 : ${gb11Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">12 : ${gb12Ad3}</span>
                </div>`;
            }


          //Friday Data
            let rgF=jsonDATA[i]["FridaySubject"];
            jkl=rgF.split(",");
            jhg=jkl.length;
            ik="";

            if(jhg == 3){
                let jkl2=jkl[2].replace('[','');
                let jkl2Ad=jkl2.replace(']','');

                let jkl1=jkl[1].replace('[','');
                let jkl1Ad=jkl1.replace(']','');

                let jkl0=jkl[0].replace('[','');
                let jkl0Ad=jkl0.replace(']','');

                    
                ik+= jkl2Ad +" Lesson In "+jkl1Ad+" At "+jkl0Ad+" .";

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:flex; width:100%;"><h3 style="color:black; font-size:25px; margin:auto;" > <span style="color:#00bcd4; font-size:25px; margin: auto;">Friday : </span>${ik}</h3></div>`;

                   
            }else if(jhg == 6){
                let gb1=jkl[4]+" Lesson In "+ jkl[2]+" At "+jkl[0];
                let gb2=jkl[5]+" Lesson In "+ jkl[3]+" At "+jkl[1];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');

                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                </div>`;

            }else if(jhg == 9){
                let gb1=jkl[6]+" Lesson In "+ jkl[3]+" At "+jkl[0];
                let gb2=jkl[7]+" Lesson In "+ jkl[4]+" At "+jkl[1];
                let gb3=jkl[8]+" Lesson In "+ jkl[5]+" At "+jkl[2];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                </div>`;
            }else if(jhg == 12){
                let gb1=jkl[8]+" Lesson In "+ jkl[4]+" At "+jkl[0];
                let gb2=jkl[9]+" Lesson In "+ jkl[5]+" At "+jkl[1];
                let gb3=jkl[10]+" Lesson In "+ jkl[6]+" At "+jkl[2];
                let gb4=jkl[11]+" Lesson In "+ jkl[7]+" At "+jkl[3];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                </div>`;
            }else if(jhg == 15){
                let gb1=jkl[10]+" Lesson In "+ jkl[5]+" At "+jkl[0];
                let gb2=jkl[11]+" Lesson In "+ jkl[6]+" At "+jkl[1];
                let gb3=jkl[12]+" Lesson In "+ jkl[7]+" At "+jkl[2];
                let gb4=jkl[13]+" Lesson In "+ jkl[8]+" At "+jkl[3];
                let gb5=jkl[14]+" Lesson In "+ jkl[9]+" At "+jkl[4];

                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                </div>`;
            }else if(jhg == 18){
                let gb1=jkl[12]+" Lesson In "+ jkl[6]+" At "+jkl[0];
                let gb2=jkl[13]+" Lesson In "+ jkl[7]+" At "+jkl[1];
                let gb3=jkl[14]+" Lesson In "+ jkl[8]+" At "+jkl[2];
                let gb4=jkl[15]+" Lesson In "+ jkl[9]+" At "+jkl[3];
                let gb5=jkl[16]+" Lesson In "+ jkl[10]+" At "+jkl[4];
                let gb6=jkl[17]+" Lesson In "+ jkl[11]+" At "+jkl[5];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                </div>`;
            }else if(jhg == 21){
                let gb1=jkl[14]+" Lesson In "+ jkl[7]+" At "+jkl[0];
                let gb2=jkl[15]+" Lesson In "+ jkl[8]+" At "+jkl[1];
                let gb3=jkl[16]+" Lesson In "+ jkl[9]+" At "+jkl[2];
                let gb4=jkl[17]+" Lesson In "+ jkl[10]+" At "+jkl[3];
                let gb5=jkl[18]+" Lesson In "+ jkl[11]+" At "+jkl[4];
                let gb6=jkl[19]+" Lesson In "+ jkl[12]+" At "+jkl[5];
                let gb7=jkl[20]+" Lesson In "+ jkl[13]+" At "+jkl[6];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                </div>`;
            }else if(jhg == 24){
                let gb1=jkl[16]+" Lesson In "+ jkl[8]+" At "+jkl[0];
                let gb2=jkl[17]+" Lesson In "+ jkl[9]+" At "+jkl[1];
                let gb3=jkl[18]+" Lesson In "+ jkl[10]+" At "+jkl[2];
                let gb4=jkl[19]+" Lesson In "+ jkl[11]+" At "+jkl[3];
                let gb5=jkl[20]+" Lesson In "+ jkl[12]+" At "+jkl[4];
                let gb6=jkl[21]+" Lesson In "+ jkl[13]+" At "+jkl[5];
                let gb7=jkl[22]+" Lesson In "+ jkl[14]+" At "+jkl[6];
                let gb8=jkl[23]+" Lesson In "+ jkl[15]+" At "+jkl[7];

                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                </div>`;
            }else if(jhg == 27){
                let gb1=jkl[18]+" Lesson In "+ jkl[9]+" At "+jkl[0];
                let gb2=jkl[19]+" Lesson In "+ jkl[10]+" At "+jkl[1];
                let gb3=jkl[20]+" Lesson In "+ jkl[11]+" At "+jkl[2];
                let gb4=jkl[21]+" Lesson In "+ jkl[12]+" At "+jkl[3];
                let gb5=jkl[22]+" Lesson In "+ jkl[13]+" At "+jkl[4];
                let gb6=jkl[23]+" Lesson In "+ jkl[14]+" At "+jkl[5];
                let gb7=jkl[24]+" Lesson In "+ jkl[15]+" At "+jkl[6];
                let gb8=jkl[25]+" Lesson In "+ jkl[16]+" At "+jkl[7];
                let gb9=jkl[26]+" Lesson In "+ jkl[17]+" At "+jkl[8];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');


               
                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                </div>`;
            }else if(jhg == 30){
                let gb1=jkl[20]+" Lesson In "+ jkl[10]+" At "+jkl[0];
                let gb2=jkl[21]+" Lesson In "+ jkl[11]+" At "+jkl[1];
                let gb3=jkl[22]+" Lesson In "+ jkl[12]+" At "+jkl[2];
                let gb4=jkl[23]+" Lesson In "+ jkl[13]+" At "+jkl[3];
                let gb5=jkl[24]+" Lesson In "+ jkl[14]+" At "+jkl[4];
                let gb6=jkl[25]+" Lesson In "+ jkl[15]+" At "+jkl[5];
                let gb7=jkl[26]+" Lesson In "+ jkl[16]+" At "+jkl[6];
                let gb8=jkl[27]+" Lesson In "+ jkl[17]+" At "+jkl[7];
                let gb9=jkl[28]+" Lesson In "+ jkl[18]+" At "+jkl[8];
                let gb10=jkl[29]+" Lesson In "+ jkl[19]+" At "+jkl[9];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                </div>`;
            }else if(jhg == 33){
                let gb1=jkl[22]+" Lesson In "+ jkl[11]+" At "+jkl[0];
                let gb2=jkl[23]+" Lesson In "+ jkl[12]+" At "+jkl[1];
                let gb3=jkl[24]+" Lesson In "+ jkl[13]+" At "+jkl[2];
                let gb4=jkl[25]+" Lesson In "+ jkl[14]+" At "+jkl[3];
                let gb5=jkl[26]+" Lesson In "+ jkl[15]+" At "+jkl[4];
                let gb6=jkl[27]+" Lesson In "+ jkl[16]+" At "+jkl[5];
                let gb7=jkl[28]+" Lesson In "+ jkl[17]+" At "+jkl[6];
                let gb8=jkl[29]+" Lesson In "+ jkl[18]+" At "+jkl[7];
                let gb9=jkl[30]+" Lesson In "+ jkl[19]+" At "+jkl[8];
                let gb10=jkl[31]+" Lesson In "+ jkl[20]+" At "+jkl[9];
                let gb11=jkl[32]+" Lesson In "+ jkl[21]+" At "+jkl[10];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb11Ad3}</span>
                </div>`;
            }else if(jhg == 36){
                let gb1=jkl[24]+" Lesson In "+ jkl[12]+" At "+jkl[0];
                let gb2=jkl[25]+" Lesson In "+ jkl[13]+" At "+jkl[1];
                let gb3=jkl[26]+" Lesson In "+ jkl[14]+" At "+jkl[2];
                let gb4=jkl[27]+" Lesson In "+ jkl[15]+" At "+jkl[3];
                let gb5=jkl[28]+" Lesson In "+ jkl[16]+" At "+jkl[4];
                let gb6=jkl[29]+" Lesson In "+ jkl[17]+" At "+jkl[5];
                let gb7=jkl[30]+" Lesson In "+ jkl[18]+" At "+jkl[6];
                let gb8=jkl[31]+" Lesson In "+ jkl[19]+" At "+jkl[7];
                let gb9=jkl[32]+" Lesson In "+ jkl[20]+" At "+jkl[8];
                let gb10=jkl[33]+" Lesson In "+ jkl[21]+" At "+jkl[9];
                let gb11=jkl[34]+" Lesson In "+ jkl[22]+" At "+jkl[10];
                let gb12=jkl[35]+" Lesson In "+ jkl[23]+" At "+jkl[11];
                
                let gb1Ad1=gb1.replace('[','');
                let gb2Ad1=gb2.replace(']','');
                let gb3Ad1=gb3.replace(']','');
                let gb4Ad1=gb4.replace(']','');
                let gb5Ad1=gb5.replace(']','');
                let gb6Ad1=gb6.replace(']','');
                let gb7Ad1=gb7.replace(']','');
                let gb8Ad1=gb8.replace(']','');
                let gb9Ad1=gb9.replace(']','');
                let gb10Ad1=gb10.replace(']','');
                let gb11Ad1=gb11.replace(']','');
                let gb12Ad1=gb11.replace(']','');


                let gb1Ad2=gb1Ad1.replace('[','');
                let gb2Ad2=gb2Ad1.replace(']','');
                let gb3Ad2=gb3Ad1.replace(']','');
                let gb4Ad2=gb4Ad1.replace(']','');
                let gb5Ad2=gb5Ad1.replace(']','');
                let gb6Ad2=gb6Ad1.replace(']','');
                let gb7Ad2=gb7Ad1.replace(']','');
                let gb8Ad2=gb8Ad1.replace(']','');
                let gb9Ad2=gb9Ad1.replace(']','');
                let gb10Ad2=gb10Ad1.replace(']','');
                let gb11Ad2=gb11Ad1.replace(']','');
                let gb12Ad2=gb12Ad1.replace(']','');

                let gb1Ad3=gb1Ad2.replace('[','');
                let gb2Ad3=gb2Ad2.replace(']','');
                let gb3Ad3=gb3Ad2.replace(']','');
                let gb4Ad3=gb4Ad2.replace(']','');
                let gb5Ad3=gb5Ad2.replace(']','');
                let gb6Ad3=gb6Ad2.replace(']','');
                let gb7Ad3=gb7Ad2.replace(']','');
                let gb8Ad3=gb8Ad2.replace(']','');
                let gb9Ad3=gb9Ad2.replace(']','');
                let gb10Ad3=gb10Ad2.replace(']','');
                let gb11Ad3=gb11Ad2.replace(']','');
                let gb12Ad3=gb12Ad2.replace(']','');
                //console.log(gb1Ad3,"\n",gb2Ad3,"\n",gb3Ad3);

                opp.innerHTML+=`<h2 style="margin:auto; color:black; margin-bottom:10px; text-decoration:underline;">Lessons</h2>
                <div style="display:grid; width:100%;">
                <span style="color:#00bcd4; font-size:25px; margin:auto; text-align:center;" >Friday : </span>
                <span style="color:black; font-size:25px; margin: auto; margin-top:10px;">1 : ${gb1Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">2 : ${gb2Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">3 : ${gb3Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">4 : ${gb4Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">5 : ${gb5Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">6 : ${gb6Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">7 : ${gb7Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">8 : ${gb8Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">9 : ${gb9Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb10Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb11Ad3}</span>
                <span style="color:black; font-size:25px; margin: auto;margin-top:10px; ">10 : ${gb12Ad3}</span>
                </div>`;
            }

                
        //

            opp.innerHTML+=`<button style="margin-top:20px;
                           font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
                           font-size:25px;
                           width:auto;
                           height:auto;
                           background-color:black;
                           color:white;
                           margin-bottom:20px;
                           cursor:pointer;" onclick="veiwMemberGraph(${jsonDATA[i]["MixedCode"]});veiwMemberCheckOutGraph(${jsonDATA[i]["MixedCode"]});">Veiw ${jsonDATA[i]["FullName"]}'s Graph</button>
            `;
            //sortByTimeFrame() to be added to the onclick of the showing  graph button
            opp.style=`position:absolute; 
                      top:0;
                      overflow:auto; 
                      bottom:0; 
                      width:50%; 
                      height:60vh; 
                      color:Black; 
                      background:honeydew; 
                      margin:auto; 
                      font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; 
                      transition: left 3s ease;
                      text-align:center;
                      cursor:pointer;`;



            
            
            let bo=document.getElementById("body");
            bo.appendChild(opp);
            }

            
        }
    }


}

function deleteMember(a){
    if(confirm("Are You Sure You Want To Delete This Member ? ") == true){
    
    let cv=jsonData["Organisation' Unique code"];
    var numberOfMembInDatabase=1000;
    let uk,uke;

    uk=document.getElementById(a);
    console.log(uk.id);
    uke=uk.id;

    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
            if(cv == jsonDATA[i]["SchoolCode"] && uke==jsonDATA[i]["IdentityCode"]){
                console.log(jsonDATA[i]["IdentityCode"]);
               
             let deletingPara1=jsonDATA[i]["SchoolCode"];
             let deletingPara2=uke;
             createCookie("deltingvaluesSCode", deletingPara1, "1");
             createCookie("deltingvaluesICode", deletingPara2, "1");
             window.location="deleteMembers.php";
        }

        }      
    }

    }

}

function closeEditMemberPage(){

    if(confirm("Are You Sure You Want To Close Without Saving ? ") == true){
    let delDoc=document.getElementById("newEditDoc");
    delDoc.parentNode.removeChild(delDoc);
    }
}


function editMember(c){

   alert("If They Are Empty Templates, Please Make sure They Are In The Bottom.");
    
    let cv=jsonData["Organisation' Unique code"];
    var numberOfMembInDatabase=1000;

    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
          if(cv == jsonDATA[i]["SchoolCode"] && c == jsonDATA[i]["IdentityCode"]){
            //console.log(jsonDATA[i]["FullName"]);
            
            let doc=document.getElementById("body");
            let newEditDoc=document.createElement("div");
            newEditDoc.id="newEditDoc";
            newEditDoc.style="overflow:auto;width:65%;height:65%;background-color:honeydew;margin:auto;position:absolute; top:20px; right:20px;left:20px;bottom:20px;";
            newEditDoc.innerHTML=`
             <h3 style="text-align:center;margin:auto;text-decoration:underline;">Edit Member's Data</h3>
             <h4 style="position:absolute; top:0; right:0;color:red;cursor:pointer;margin:auto;font-size:20px;" onclick="closeEditMemberPage()">Close</h4>

             <form method="post" action="edit.php">

             <input type="text" value="${jsonDATA[i]["SchoolCode"]}" style="visibility:hidden;" name="editMemberSchoolCode" >
             <input type="text" value="${jsonDATA[i]["MixedCode"]}" style="visibility:hidden;" name="mixedCode" >

             <div id="editFullName" style="display:flex; padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:left;">FullName :</h4>
             <input type="text" name="editFullName" value='${jsonDATA[i]["FullName"]}' style="font-size:25px; text-align:center;width:auto;">
             </div>

             <div id="editIdentificationCode" style="display:flex; padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:left;">Identification Code :</h4>
             <input type="text" name="editIdentificationCode" value='${jsonDATA[i]["IdentityCode"]}' style="font-size:25px; text-align:center;width:auto;">
             </div>

             <div id="editSubjectTaught" style="display:flex; padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:left;">Subject Taught :</h4>
             <input type="text" name="editSubjectTaught" value='${jsonDATA[i]["Subject"]}' style="font-size:25px; text-align:center;width:auto;">
             </div>


             <div id="editMondaySubject" style=" padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:center; text-decoration:underline;">Monday's Lessons :</h4>
             
             <div style="display:flex; width:90%;">
             <h4 style="margin:auto; font-size:20px; font-family:tahoma; ">Lessons To Add : </h4>
             <input type="number" min="0" style="font-size:22px;text-align:center; width:50px; margin-right:20px;" id="addingLessonsMon">
             <input type="button" style="font-size:20px;color:black;background-color:grey; border:none;" onclick="addLessonsMondayEdit()" value="Add Lessons">
             </div>

             </div>

             <div id="editTuesdaySubject" style=" padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:center; text-decoration:underline;">Tuesday's Lessons :</h4>
             
             <div style="display:flex; width:90%;">
             <h4 style="margin:auto; font-size:20px; font-family:tahoma; ">Lessons To Add : </h4>
             <input type="number" min="0" style="font-size:22px;text-align:center; width:50px; margin-right:20px;" id="addingLessonsTue">
             <input type="button" style="font-size:20px;color:black;background-color:grey; border:none;" onclick="addLessonsTuesdayEdit()" value="Add Lessons">
             </div>

             </div>

             <div id="editWenSubject" style=" padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:center; text-decoration:underline;">Wednesday's Lessons :</h4>

             <div style="display:flex; width:90%;">
             <h4 style="margin:auto; font-size:20px; font-family:tahoma; ">Lessons To Add : </h4>
             <input type="number" min="0" style="font-size:22px;text-align:center; width:50px; margin-right:20px;" id="addingLessonsWen">
             <input type="button" style="font-size:20px;color:black;background-color:grey; border:none;" onclick="addLessonsWenEdit()" value="Add Lessons">
             </div>

             </div>

             <div id="editThursdaySubject" style=" padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:center; text-decoration:underline;">Thursday's Lessons :</h4>

             <div style="display:flex; width:90%;">
             <h4 style="margin:auto; font-size:20px; font-family:tahoma; ">Lessons To Add : </h4>
             <input type="number" min="0" style="font-size:22px;text-align:center; width:50px; margin-right:20px;" id="addingLessonsThur">
             <input type="button" style="font-size:20px;color:black;background-color:grey; border:none;" onclick="addLessonsThurEdit()" value="Add Lessons">
             </div>

             </div>

             <div id="editFridaySubject" style=" padding-top:20px; margin:auto;">
             <h4 style="font-size:25px; margin:auto; text-align:center; text-decoration:underline;">Friday's Lessons :</h4>

             <div style="display:flex; width:90%;">
             <h4 style="margin:auto; font-size:20px; font-family:tahoma; ">Lessons To Add : </h4>
             <input type="number" min="0" style="font-size:22px;text-align:center; width:50px; margin-right:20px;" id="addingLessonsFri">
             <input type="button" style="font-size:20px;color:black;background-color:grey; border:none;" onclick="addLessonsFriEdit()" value="Add Lessons">
             </div>

             </div>
             
             <button style="font-size:24px;margin:auto; width:auto;height;auto; margin-top:20px;margin-bottom:15px;margin-left:50%; color:black; background:grey; border:none;">Save Changes</button>
             </form>
            `;

            //newEditDoc.onload=editMondaySubject(jsonDATA[i]["MondaySubject"]);
            doc.appendChild(newEditDoc);

            setTimeout(() => {
              editMondaySubject(jsonDATA[i]["MondaySubject"]);
              editTuesdaySubject(jsonDATA[i]["TuesdaySubject"]);
              editWenSubject(jsonDATA[i]["WenSubject"]);
              editThursdaySubject(jsonDATA[i]["ThursdaySubject"]);
              editFridaySubject(jsonDATA[i]["FridaySubject"]);
              
            }, 50);

            }
        }
    }

}


function addLessonsMondayEdit(){
    let inputData=document.getElementById("addingLessonsMon");
    let mondaySubjectDiv=document.getElementById("editMondaySubject");
    let num=parseInt(document.getElementById("numOfTimesM").value)+1;
    let df=document.getElementsByClassName("numOfTimesM");

    let o=0;

    if(inputData.value >0){
        
        while(inputData.value > o){
        mondaySubjectDiv.innerHTML+=`
        <div style="margin:auto; width:100%;">

        <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${num}</h3>
        <div style="margin-left:30%;">
        <h3 style="margin:auto;text-align:left; ">Time : </h3>
        <input name="editMonTime${num}" type="time"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto;  margin-left:30%; ">
        <h3 style="margin:auto;text-align:left;">Class : </h3>
        <input name="editMonClass${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto; margin-left:30%;">
        <h3 style="margin:auto;text-align:left;">Subject : </h3>
        <input name="editMonSubject${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        </div>
        `;

        num++;
        o++;

      }
        df[0].parentNode.removeChild(df[0]);
        console.log(df)
       
        mondaySubjectDiv.innerHTML+=`<input type="text" value="${num-1}" style="visibility:hidden;" name="numOfTimesM" id="numOfTimesM" class="numOfTimesM">`
      
    }

}

function addLessonsTuesdayEdit(){
    let inputData=document.getElementById("addingLessonsTue");
    let mondaySubjectDiv=document.getElementById("editTuesdaySubject");
    let num=parseInt(document.getElementById("numOfTimesT").value)+1;
    let df=document.getElementsByClassName("numOfTimesT");

    let o=0;

    if(inputData.value >0){

        while(inputData.value> o){

        mondaySubjectDiv.innerHTML+=`
        <div style="margin:auto; width:100%;">

        <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${num}</h3>
        <div style="margin-left:30%;">
        <h3 style="margin:auto;text-align:left; ">Time : </h3>
        <input name="editMonTimet${num}" type="time"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto;  margin-left:30%; ">
        <h3 style="margin:auto;text-align:left;">Class : </h3>
        <input name="editMonClasst${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto; margin-left:30%;">
        <h3 style="margin:auto;text-align:left;">Subject : </h3>
        <input name="editMonSubjectt${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        </div>
        `;

        num++;
        o++;


        }

        
        df[0].parentNode.removeChild(df[0]);
        mondaySubjectDiv.innerHTML+=`<input type="text" value="${num-1}" style="visibility:hidden;" name="numOfTimesT" id="numOfTimesT" class="numOfTimesT">`

    }

}

function addLessonsWenEdit(){
    let inputData=document.getElementById("addingLessonsWen");
    let mondaySubjectDiv=document.getElementById("editWenSubject");
    let num=parseInt(document.getElementById("numOfTimesW").value)+1;
    let df=document.getElementsByClassName("numOfTimesW");

    let o=0;

    if(inputData.value >0){

        while(inputData.value> o){

        mondaySubjectDiv.innerHTML+=`
        <div style="margin:auto; width:100%;">

        <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${num}</h3>
        <div style="margin-left:30%;">
        <h3 style="margin:auto;text-align:left; ">Time : </h3>
        <input name="editMonTimew${num}" type="time"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto;  margin-left:30%; ">
        <h3 style="margin:auto;text-align:left;">Class : </h3>
        <input name="editMonClassw${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto; margin-left:30%;">
        <h3 style="margin:auto;text-align:left;">Subject : </h3>
        <input name="editMonSubjectw${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        </div>
        `;

        num++;
        o++;


        }

        
        df[0].parentNode.removeChild(df[0]);
        mondaySubjectDiv.innerHTML+=`<input type="text" value="${num-1}" style="visibility:hidden;" name="numOfTimesW" id="numOfTimesW" class="numOfTimesW">`

    }

}

function addLessonsThurEdit(){
    let inputData=document.getElementById("addingLessonsThur");
    let mondaySubjectDiv=document.getElementById("editThursdaySubject");
    let num=parseInt(document.getElementById("numOfTimesTH").value)+1;
    let df=document.getElementsByClassName("numOfTimesTH");

    let o=0;

    if(inputData.value >0){

        while(inputData.value> o){

        mondaySubjectDiv.innerHTML+=`
        <div style="margin:auto; width:100%;">

        <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${num}</h3>
        <div style="margin-left:30%;">
        <h3 style="margin:auto;text-align:left; ">Time : </h3>
        <input name="editMonTimeth${num}" type="time"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto;  margin-left:30%; ">
        <h3 style="margin:auto;text-align:left;">Class : </h3>
        <input name="editMonClassth${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto; margin-left:30%;">
        <h3 style="margin:auto;text-align:left;">Subject : </h3>
        <input name="editMonSubjectth${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        </div>
        `;

        num++;
        o++;


        }

        df[0].parentNode.removeChild(df[0]);
        mondaySubjectDiv.innerHTML+=`<input type="text" value="${num-1}" style="visibility:hidden;" name="numOfTimesTH" id="numOfTimesTH" class="numOfTimesTH">`

    }

}

function addLessonsFriEdit(){
    let inputData=document.getElementById("addingLessonsFri");
    let mondaySubjectDiv=document.getElementById("editFridaySubject");
    let num=parseInt(document.getElementById("numOfTimesF").value)+1;
    let df=document.getElementsByClassName("numOfTimesF");

    let o=0;

    if(inputData.value >0){

        while(inputData.value> o){

        mondaySubjectDiv.innerHTML+=`
        <div style="margin:auto; width:100%;">

        <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${num}</h3>
        <div style="margin-left:30%;">
        <h3 style="margin:auto;text-align:left; ">Time : </h3>
        <input name="editMonTimef${num}" type="time"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto;  margin-left:30%; ">
        <h3 style="margin:auto;text-align:left;">Class : </h3>
        <input name="editMonClassf${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        <div style="margin:auto; margin-left:30%;">
        <h3 style="margin:auto;text-align:left;">Subject : </h3>
        <input name="editMonSubjectf${num}" type="text"  style="font-size:25px;margin-top:10px;text-align:center;">
        </div>

        </div>
        `;

        num++;
        o++;


        }

        df[0].parentNode.removeChild(df[0]);
        mondaySubjectDiv.innerHTML+=`<input type="text" value="${num-1}" style="visibility:hidden;" name="numOfTimesF" id="numOfTimesF" class="numOfTimesF">`

    }

}




function giveNumAdd(p){
    let d=0;
    switch (p) {
      case 1:
          d=0;
          break;
      case 2:
          d=1;
          break;
      case 3:
          d=2;
          break;
      case 4:
          d=3;
          break;
      case 5:
          d=4;
          break;
      case 6:
          d=5;
          break;
       case 7:
          d=6;
          break;
       case 8:
          d=7;
          break;
       case 9:
          d=8;
          break;
       case 10:
          d=9;
          break;
       case 11:
          d=10;
          break; 
  }

  return d

}

function editMondaySubject(a){
  let editMonDoc=document.getElementById("editMondaySubject");

  let str=a.replace(/[\[\]']/g,'' );
  let sxa=str.split(',');
  let numToUse=sxa.length/3;

  console.log(sxa);

  let timeArr=[];
  let classArr=[];
  let subjectArr=[];

  let s=0;
  
  
  while(sxa.length>s){
      if(s<numToUse){
        timeArr.push(sxa[s]);
        s++;
        //console.log(s)
      }else if(s >= numToUse && s <= (numToUse+giveNumAdd(numToUse)) ){
          classArr.push(sxa[s]);
          s++;
      }else {
          subjectArr.push(sxa[s]);
          s++;
      }
   
 
  }
  
  //console.log(timeArr)
  console.log(classArr)
  console.log(subjectArr)

  for (let u = 0; u < timeArr.length; u++) {
      if(timeArr[u].length == 4){
          //newtimeArr.push(timeArr[u]);
          let rf=timeArr[u];
          rf.replace(/['"]+/g, '');
          let newRf="0"+rf;
          timeArr[u]=timeArr[u].replace(rf,newRf);
          //console.log(newRf);
          //console.log(rf);
      }
      
  }

  console.log(timeArr)

  let dataDiv=document.createElement("div");
  let yu=0;
  let yuu=1;
  dataDiv.style="width:100%;margin:auto;";

  while(timeArr.length> yu){
   
   dataDiv.innerHTML+=`
    <div style="margin:auto; width:100%;">

    <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${yuu}</h3>
    <div style="margin-left:30%;">
    <h3 style="margin:auto;text-align:left; ">Time : </h3>
    <input name="editMonTime${yuu}" type="time" value="${timeArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>

    <div style="margin:auto;  margin-left:30%; ">
    <h3 style="margin:auto;text-align:left;">Class : </h3>
    <input name="editMonClass${yuu}" type="text" value="${classArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
     </div>

    <div style="margin:auto; margin-left:30%;">
    <h3 style="margin:auto;text-align:left;">Subject : </h3>
    <input name="editMonSubject${yuu}" type="text" value="${subjectArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>


    </div>
    `;   
 
    if(yuu == timeArr.length){
        console.log(yuu);
        dataDiv.innerHTML+=`<input type="text" value="${yuu}" style="visibility:hidden;" name="numOfTimesM" id="numOfTimesM" class="numOfTimesM">`;
    }
    
    editMonDoc.appendChild(dataDiv);
    yu++;
    yuu++;

    

  }

}

function editTuesdaySubject(a){
  let editMonDoc=document.getElementById("editTuesdaySubject");

  let str=a.replace(/[\[\]']/g,'' );
  let sxa=str.split(',');
  let numToUse=sxa.length/3;

  console.log(sxa);

  let timeArr=[];
  let classArr=[];
  let subjectArr=[];

  let s=0;
  
  
  while(sxa.length>s){
      if(s<numToUse){
        timeArr.push(sxa[s]);
        s++;
        //console.log(s)
      }else if(s >= numToUse && s <= (numToUse+giveNumAdd(numToUse)) ){
          classArr.push(sxa[s]);
          s++;
      }else {
          subjectArr.push(sxa[s]);
          s++;
      }
   
 
  }
  
  //console.log(timeArr)
  console.log(classArr)
  console.log(subjectArr)

  for (let u = 0; u < timeArr.length; u++) {
      if(timeArr[u].length == 4){
          //newtimeArr.push(timeArr[u]);
          let rf=timeArr[u];
          rf.replace(/['"]+/g, '');
          let newRf="0"+rf;
          timeArr[u]=timeArr[u].replace(rf,newRf);
          //console.log(newRf);
          //console.log(rf);
      }
      
  }

  console.log(timeArr)

  let dataDiv=document.createElement("div");
  let yu=0;
  let yuu=1;
  dataDiv.style="width:100%;margin:auto;";

  while(timeArr.length> yu){
   
   dataDiv.innerHTML+=`
    <div style="margin:auto; width:100%;">

    <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${yuu}</h3>
    <div style="margin-left:30%;">
    <h3 style="margin:auto;text-align:left; ">Time : </h3>
    <input name="editMonTimet${yuu}" type="time" value="${timeArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>

    <div style="margin:auto;  margin-left:30%; ">
    <h3 style="margin:auto;text-align:left;">Class : </h3>
    <input name="editMonClasst${yuu}" type="text" value="${classArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
     </div>

    <div style="margin:auto; margin-left:30%;">
    <h3 style="margin:auto;text-align:left;">Subject : </h3>
    <input name="editMonSubjectt${yuu}" type="text" value="${subjectArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>


    </div>
    `;   

    if(yuu == timeArr.length){
        console.log(yuu);
        dataDiv.innerHTML+=`<input type="text" value="${yuu}" style="visibility:hidden;" name="numOfTimesT"id="numOfTimesT"class="numOfTimesT">`;
    }
    editMonDoc.appendChild(dataDiv);
    yu++;
    yuu++;
    
    


  }

}

function editWenSubject(a){
  let editMonDoc=document.getElementById("editWenSubject");

  let str=a.replace(/[\[\]']/g,'' );
  let sxa=str.split(',');
  let numToUse=sxa.length/3;

  console.log(sxa);

  let timeArr=[];
  let classArr=[];
  let subjectArr=[];

  let s=0;
  
  
  while(sxa.length>s){
      if(s<numToUse){
        timeArr.push(sxa[s]);
        s++;
        //console.log(s)
      }else if(s >= numToUse && s <= (numToUse+giveNumAdd(numToUse)) ){
          classArr.push(sxa[s]);
          s++;
      }else {
          subjectArr.push(sxa[s]);
          s++;
      }
   
 
  }
  
  //console.log(timeArr)
  console.log(classArr)
  console.log(subjectArr)

  for (let u = 0; u < timeArr.length; u++) {
      if(timeArr[u].length == 4){
          //newtimeArr.push(timeArr[u]);
          let rf=timeArr[u];
          rf.replace(/['"]+/g, '');
          let newRf="0"+rf;
          timeArr[u]=timeArr[u].replace(rf,newRf);
          //console.log(newRf);
          //console.log(rf);
      }
      
  }

  console.log(timeArr)

  let dataDiv=document.createElement("div");
  let yu=0;
  let yuu=1;
  dataDiv.style="width:100%;margin:auto;";

  while(timeArr.length> yu){
   
   dataDiv.innerHTML+=`
    <div style="margin:auto; width:100%;">

    <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${yuu}</h3>
    <div style="margin-left:30%;">
    <h3 style="margin:auto;text-align:left; ">Time : </h3>
    <input name="editMonTimew${yuu}" type="time" value="${timeArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>

    <div style="margin:auto;  margin-left:30%; ">
    <h3 style="margin:auto;text-align:left;">Class : </h3>
    <input name="editMonClassw${yuu}" type="text" value="${classArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
     </div>

    <div style="margin:auto; margin-left:30%;">
    <h3 style="margin:auto;text-align:left;">Subject : </h3>
    <input name="editMonSubjectw${yuu}" type="text" value="${subjectArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>


    </div>
    `;   

    if(yuu == timeArr.length){
        console.log(yuu);
        dataDiv.innerHTML+=`<input type="text" value="${yuu}" style="visibility:hidden;" name="numOfTimesW"id="numOfTimesW"class="numOfTimesW">`;
    }
 
    editMonDoc.appendChild(dataDiv);
    yu++;
    yuu++;
    
    

  }

}

function editThursdaySubject(a){
  let editMonDoc=document.getElementById("editThursdaySubject");

  let str=a.replace(/[\[\]']/g,'' );
  let sxa=str.split(',');
  let numToUse=sxa.length/3;

  console.log(sxa);

  let timeArr=[];
  let classArr=[];
  let subjectArr=[];

  let s=0;
  
  
  while(sxa.length>s){
      if(s<numToUse){
        timeArr.push(sxa[s]);
        s++;
        //console.log(s)
      }else if(s >= numToUse && s <= (numToUse+giveNumAdd(numToUse)) ){
          classArr.push(sxa[s]);
          s++;
      }else {
          subjectArr.push(sxa[s]);
          s++;
      }
   
 
  }
  
  //console.log(timeArr)
  console.log(classArr)
  console.log(subjectArr)

  for (let u = 0; u < timeArr.length; u++) {
      if(timeArr[u].length == 4){
          //newtimeArr.push(timeArr[u]);
          let rf=timeArr[u];
          rf.replace(/['"]+/g, '');
          let newRf="0"+rf;
          timeArr[u]=timeArr[u].replace(rf,newRf);
          //console.log(newRf);
          //console.log(rf);
      }
      
  }

  console.log(timeArr)

  let dataDiv=document.createElement("div");
  let yu=0;
  let yuu=1;
  dataDiv.style="width:100%;margin:auto;";

  while(timeArr.length> yu){
   
   dataDiv.innerHTML+=`
    <div style="margin:auto; width:100%;">

    <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${yuu}</h3>
    <div style="margin-left:30%;">
    <h3 style="margin:auto;text-align:left; ">Time : </h3>
    <input name="editMonTimeth${yuu}" type="time" value="${timeArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>

    <div style="margin:auto;  margin-left:30%; ">
    <h3 style="margin:auto;text-align:left;">Class : </h3>
    <input name="editMonClassth${yuu}" type="text" value="${classArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
     </div>

    <div style="margin:auto; margin-left:30%;">
    <h3 style="margin:auto;text-align:left;">Subject : </h3>
    <input name="editMonSubjectth${yuu}" type="text" value="${subjectArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>


    </div>
    `;   

    if(yuu == timeArr.length){
        console.log(yuu);
        dataDiv.innerHTML+=`<input type="text" value="${yuu}" style="visibility:hidden;" name="numOfTimesTH"id="numOfTimesTH" class="numOfTimesTH">`;
    }
 
    editMonDoc.appendChild(dataDiv);
    yu++;
    yuu++;
    
    

  }

}

function editFridaySubject(a){
  let editMonDoc=document.getElementById("editFridaySubject");

  let str=a.replace(/[\[\]']/g,'' );
  let sxa=str.split(',');
  let numToUse=sxa.length/3;

  console.log(sxa);

  let timeArr=[];
  let classArr=[];
  let subjectArr=[];

  let s=0;
  
  
  while(sxa.length>s){
      if(s<numToUse){
        timeArr.push(sxa[s]);
        s++;
        //console.log(s)
      }else if(s >= numToUse && s <= (numToUse+giveNumAdd(numToUse)) ){
          classArr.push(sxa[s]);
          s++;
      }else {
          subjectArr.push(sxa[s]);
          s++;
      }
   
 
  }
  
  //console.log(timeArr)
  console.log(classArr)
  console.log(subjectArr)

  for (let u = 0; u < timeArr.length; u++) {
      if(timeArr[u].length == 4){
          //newtimeArr.push(timeArr[u]);
          let rf=timeArr[u];
          rf.replace(/['"]+/g, '');
          let newRf="0"+rf;
          timeArr[u]=timeArr[u].replace(rf,newRf);
          //console.log(newRf);
          //console.log(rf);
      }
      
  }

  console.log(timeArr)

  let dataDiv=document.createElement("div");
  let yu=0;
  let yuu=1;
  dataDiv.style="width:100%;margin:auto;";

  while(timeArr.length> yu){
   
   dataDiv.innerHTML+=`
    <div style="margin:auto; width:100%;">

    <h3 style="text-align:center;text-decoration:underline wavy;color:grey;">Lesson ${yuu}</h3>
    <div style="margin-left:30%;">
    <h3 style="margin:auto;text-align:left; ">Time : </h3>
    <input name="editMonTimef${yuu}" type="time" value="${timeArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>

    <div style="margin:auto;  margin-left:30%; ">
    <h3 style="margin:auto;text-align:left;">Class : </h3>
    <input name="editMonClassf${yuu}" type="text" value="${classArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
     </div>

    <div style="margin:auto; margin-left:30%;">
    <h3 style="margin:auto;text-align:left;">Subject : </h3>
    <input name="editMonSubjectf${yuu}" type="text" value="${subjectArr[yu]}" style="font-size:25px;margin-top:10px;text-align:center;">
    </div>


    </div>
    `;   
    if(yuu == timeArr.length){
        console.log(yuu);
        dataDiv.innerHTML+=`<input type="text" value="${yuu}" style="visibility:hidden;" name="numOfTimesF"id="numOfTimesF"class="numOfTimesF">`;
    }
 

    editMonDoc.appendChild(dataDiv);
    yu++;
    yuu++;

    

  }

}

// sort by What Method in the time of the graphs
function sortByTimeFrame(){
    
    let docToAddSortBy=document.getElementById("opp");
    let inputSortBy=document.createElement("div");
    inputSortBy.innerHTML=`
    <h4 style="margin:auto; font-size:20px;">Sort By</h4>
    <select style="margin:auto; font-size:20px; margin-bottom:20px;" onchange="applyChangeOnGraph()" id="sel">
    <option value="Day" selected>Day</option>
    <option value="Week">Week</option>
    <option value="Year">Year</option>
    </select>`;
    
    
    docToAddSortBy.appendChild(inputSortBy);
    

}


//CHECK IN OF GRAPH

function veiwMemberGraph(s){
    let sda=document.getElementById("dataTimeAll");
  if(!sda){
        
    let docAddingGraph=document.getElementById("opp");
    //let newGraphDoc=document.createElement("div");
    let allDataYears=[];
    let allLateTime=[];
    let accessibleYears=[];
    let accessibleMonth=[];
    let accessibleDay=[];
    let fullDataX;
    let dataGraph=document.createElement("div");
   


    for (let i = 0; i < 1000; i++) {
        if(jsonDATA[i]){
         if(s == jsonDATA[i]["MixedCode"]){
           let splitingStr=jsonDATA[i]["CheckingData"];
           let cbvn=splitingStr.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
           let adss=1;

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

          console.log(allDataYears);

          while(cbvnLength>adss){
            allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              adss=adss+2;
              
          }
          console.log(allLateTime);
         
         let lastTimeYear=allDataYears[allDataYears.length -1];
         let indexOfSameYear=[];

         
         for (let sm = 0; sm < allDataYears.length; sm++) {
             if(allDataYears[sm] == lastTimeYear){
                 //console.log(sm)
                 indexOfSameYear.push(sm);
             }
         }

         let sameLateTimeData=[];

         for (let cb = 0; cb < indexOfSameYear.length; cb++) {
            sameLateTimeData.push(allLateTime[indexOfSameYear[cb]]);
          
         }

        
         //let lastTimeData=allLateTime[allLateTime.length -1];
         dataGraph.innerHTML=`<div id="dataTimeAll">
          <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking In Graph</h3>

          <div style="display:flex; cursor:pointer;" >
          <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwards(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
          <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
          margin:auto;" id="correctDATE">${lastTimeYear}</h4>
          <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goForwards(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
          </div>

          
          <div id="appendGraph" style="width:100%;height:250px; 
          margin:auto;display:flex; position:relative;">

          <div style="postion:absolute; left:0px;
          width:20px;height:100%; background-color:grey;color:black;
          writing-mode: vertical-rl; font-size:20px;
          font-family:Tahoma;">Late Minutes</div>
         
          </div>

          <div style="width:100%;height:20px; background-color:grey;color:black;
          writing-mode:horizontal-tb; ; font-size:20px;
          font-family:Tahoma;">Late Time (In Minutes)</div>
         

          </div>`;
         

         docAddingGraph.appendChild(dataGraph);

         let graph=document.getElementById("appendGraph");

        // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
         let smi=0;
         let margin_left=25;
         let graphHeight=0;

         var largest= 0;

         for (i=0; i<=largest;i++){
           if (parseInt(sameLateTimeData[i])>largest) {
             var largest=parseInt(sameLateTimeData[i]);
            }
         }


         console.log(largest)

          let multipyingNumber=0;
         let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
         let colorToUse;
        
         if(largest>0 && largest<10){
             multiplyingNumber=22;
             colorToUse=colorArr[0];
         }else if(largest>=10 && largest<20){
            multiplyingNumber=12.2;
            colorToUse=colorArr[1];
         }else if(largest>=20 && largest<30){
            multiplyingNumber=8.5;
            colorToUse=colorArr[2];
         }else if(largest>=30 && largest<40){
            multiplyingNumber=6.4;
            colorToUse=colorArr[3];
            
         }

         while(sameLateTimeData.length >smi){

            graphHeight=sameLateTimeData[smi]*multiplyingNumber;

            graph.innerHTML+=`<div 
            style="margin-right:10px;
            margin-left:${margin_left}px;
            width:20px; 
            background-image:${colorToUse}; 
            height:${graphHeight}px;
            position: absolute; 
            bottom:0px;
            color:black;
            writing-mode: vertical-rl; 
            font-size:20px;
            font-family:Tahoma;">
            ${sameLateTimeData[smi]}
            </div>
            
            `;

        
            margin_left=margin_left+30;

            smi++;
         }

         
        }
    }
    }

    }
}
    


function goBackwards(sun){
   let graphDiv=document.getElementById("appendGraph");

   graphDiv.parentNode.removeChild(graphDiv);

    let docAddingGraph=document.getElementById("opp");
    let newGraphDoc=document.createElement("div");
    let allDataYears=[];
    let allLateTime=[];
    let accessibleYears=[];
    let accessibleMonth=[];
    let accessibleDay=[];
    let fullDataX;
    let dataGraph=document.createElement("div");
    let pervoiusDate=document.getElementById("correctDATE")
    
    
    for (let i = 0; i < 1000; i++) {
     if(jsonDATA[i]){
        if(sun == jsonDATA[i]["MixedCode"]){
            let splitingStr=jsonDATA[i]["CheckingData"];
           let cbvn=splitingStr.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
           let adss=1;

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

          console.log(allDataYears);

          while(cbvnLength>adss){
            allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              adss=adss+2;
              
          }
          console.log(allLateTime);
         
         let pervYear;
         let IndexOfperviousYearArr=[];

         
         for (let sm = 0; sm < allDataYears.length; sm++) {
             if(allDataYears[sm] == pervoiusDate.innerText){
                 //console.log(sm);
                 IndexOfperviousYearArr.push(sm);
             }
         }

         if(IndexOfperviousYearArr[0]!=0){
            pervYear=IndexOfperviousYearArr[0]-1;
            console.log(pervYear);

            let yearsOfPerviousYearIndex=[];

            for (let i = 0; i < allDataYears.length; i++) {
                if(allDataYears[pervYear]==allDataYears[i])
                yearsOfPerviousYearIndex.push(i)
            }

            console.log(yearsOfPerviousYearIndex);

            let sameLateTimeData=[];

             for (let cb = 0; cb < yearsOfPerviousYearIndex.length; cb++) {
              sameLateTimeData.push(allLateTime[yearsOfPerviousYearIndex[cb]]);
          
         }

           console.log(sameLateTimeData)

           dataGraph.innerHTML=`<div id="dataTimeAll">
           <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking In Graph</h3>
          <div style="display:flex; cursor:pointer;" >
            <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwards(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
            <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin:auto;" id="correctDATE">${allDataYears[pervYear]}</h4>
            <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goForwards(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
           </div>

 
           <div id="appendGraph" style="width:100%;height:250px; 
            margin:auto;display:flex; position:relative;">

            <div style="postion:absolute; left:0px;
             width:20px;height:100%; background-color:grey;color:black;
               writing-mode: vertical-rl; font-size:20px;
                font-family:Tahoma;">Late Minutes</div>

              </div>

              <div style="width:100%;height:20px; background-color:grey;color:black;
               writing-mode:horizontal-tb; ; font-size:20px;
               font-family:Tahoma;">Late Time (In Minutes)</div>

            </div>`;

            let xcvs=document.getElementById("dataTimeAll");
            xcvs.parentNode.removeChild(xcvs)


            docAddingGraph.appendChild(dataGraph);

            let graph=document.getElementById("appendGraph");

           // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
           let smi=0;
           let margin_left=25;
           let graphHeight=0;

           var largest= 0;

           for (i=0; i<=largest;i++){
              if (parseInt(sameLateTimeData[i])>largest) {
                     var largest=parseInt(sameLateTimeData[i]);
                }
            }


            console.log(largest)


            let multipyingNumber=0;
             let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
            let colorToUse;

            if(largest>0 && largest<10){
              multiplyingNumber=22;
              colorToUse=colorArr[0];
              }else if(largest>=10 && largest<20){
                multiplyingNumber=12.2;
                colorToUse=colorArr[1];
              }else if(largest>=20 && largest<30){
                multiplyingNumber=8.5;
                colorToUse=colorArr[2];
              }else if(largest>=30 && largest<40){
                multiplyingNumber=6.4;
                colorToUse=colorArr[3];
              }
     

             while(sameLateTimeData.length >smi){

               graphHeight=sameLateTimeData[smi]*multiplyingNumber;

               graph.innerHTML+=`<div 
               style="margin-right:10px;
               margin-left:${margin_left}px;
               width:20px; 
               background-image:${colorToUse}; 
               height:${graphHeight}px;
               position: absolute; 
               bottom:0px;
               color:black;
               writing-mode: vertical-rl; 
               font-size:20px;
                font-family:Tahoma;">
               ${sameLateTimeData[smi]}
           </div>
            `;


            margin_left=margin_left+30;

            smi++;
         }
          
         }
 

        }
        }
    }

}

function goForwards(sun){

    let graphDiv=document.getElementById("appendGraph");

    //graphDiv.parentNode.removeChild(graphDiv);

    let docAddingGraph=document.getElementById("opp");
    let newGraphDoc=document.createElement("div");
    let allDataYears=[];
    let allLateTime=[];
    let accessibleYears=[];
    let accessibleMonth=[];
    let accessibleDay=[];
    let fullDataX;
    let dataGraph=document.createElement("div");
    let pervoiusDate=document.getElementById("correctDATE")
 
 
 for (let i = 0; i < 1000; i++) {
     if(jsonDATA[i]){
        if(sun == jsonDATA[i]["MixedCode"]){
         let splitingStr=jsonDATA[i]["CheckingData"];
        let cbvn=splitingStr.split(",");
        cbvn.pop();
        let cbvnLength=cbvn.length;
        let asss=0;
        let adss=1;

       while(cbvnLength>asss){
           allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
           //console.log(cbvn[asss+1]);
           asss=asss+2;
           
       }

       console.log(allDataYears);

       while(cbvnLength>adss){
         allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
           //console.log(cbvn[asss+1]);
           adss=adss+2;
           
       }
       console.log(allLateTime);
      
      let nextYear;
      let IndexOfperviousYearArr=[];

      
      for (let sm = 0; sm < allDataYears.length; sm++) {
          if(allDataYears[sm] == pervoiusDate.innerText){
              //console.log(sm);
              IndexOfperviousYearArr.push(sm);
          }
      }

     console.log(IndexOfperviousYearArr);

     let indexOfyearToGoBack=IndexOfperviousYearArr[IndexOfperviousYearArr.length - 1]+1;
     
     if(indexOfyearToGoBack != allDataYears.length){
         
        console.log("indexOfyearToGoBack "+indexOfyearToGoBack);
     
     let yearToGoBack=allDataYears[indexOfyearToGoBack];
     let dataW=[]

     for (let jkl = 0; jkl < allDataYears.length; jkl++) {
       if(yearToGoBack == allDataYears[jkl]){
           dataW.push(jkl)

       }
         
     }
     console.log(dataW);

     let gobackLateTime=[];
     let gf=0;

     while (dataW.length>gf){
        gobackLateTime.push(allLateTime[dataW[gf]]);
        gf++;
     }

     console.log(gobackLateTime);


     dataGraph.innerHTML=`<div id="dataTimeAll">
     <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking In Graph</h3>
          <div style="display:flex; cursor:pointer;" >
            <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwards(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
            <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin:auto;" id="correctDATE">${yearToGoBack}</h4>
            <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goForwards(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
           </div>

 
           <div id="appendGraph" style="width:100%;height:250px; 
            margin:auto;display:flex; position:relative;">

            <div style="postion:absolute; left:0px;
             width:20px;height:100%; background-color:grey;color:black;
               writing-mode: vertical-rl; font-size:20px;
                font-family:Tahoma;">Late Minutes</div>

              </div>

              <div style="width:100%;height:20px; background-color:grey;color:black;
               writing-mode:horizontal-tb; ; font-size:20px;
               font-family:Tahoma;">Late Time (In Minutes)</div>

            </div>`;

            let xcvs=document.getElementById("dataTimeAll");
            xcvs.parentNode.removeChild(xcvs)


            docAddingGraph.appendChild(dataGraph);

            let graph=document.getElementById("appendGraph");

          // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
          let smi=0;
           let margin_left=25;
          let graphHeight=0;

          var largest= 0;

          for (i=0; i<=largest;i++){
             if (parseInt(gobackLateTime[i])>largest) {
               var largest=parseInt(gobackLateTime[i]);
             }
           }


            console.log(largest)


           let multipyingNumber=0;
           let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
           let colorToUse;

           if(largest>0 && largest<10){
            multiplyingNumber=22;
            colorToUse=colorArr[0];
            }else if(largest>=10 && largest<20){
             multiplyingNumber=12.2;
             colorToUse=colorArr[1];
             }else if(largest>=20 && largest<30){
               multiplyingNumber=8.5;
                 colorToUse=colorArr[2];
             }else if(largest>=30 && largest<40){
              multiplyingNumber=6.4;
               colorToUse=colorArr[3];
        }


           while(gobackLateTime.length >smi){

            graphHeight=gobackLateTime[smi]*multiplyingNumber;

             graph.innerHTML+=`<div 
             style="margin-right:10px;
             margin-left:${margin_left}px;
             width:20px; 
             background-image:${colorToUse}; 
             height:${graphHeight}px;
             position: absolute; 
             bottom:0px;
             color:black;
              writing-mode: vertical-rl; 
             font-size:20px;
             font-family:Tahoma;">
             ${gobackLateTime[smi]}
            </div>
            `;


            margin_left=margin_left+30;

             smi++;
         }



 }
        }

     }

     
 }


}

//CHECK OUT GRAPH


function veiwMemberCheckOutGraph(s){

 //console.log("checking Out Graph")

 let sda=document.getElementById("dataTimeAllO");
 if(!sda){
    
 let docAddingGraph=document.getElementById("opp");
 let newGraphDoc=document.createElement("div");
 let allDataYears=[];
 let allLateTime=[];
 let accessibleYears=[];
 let accessibleMonth=[];
 let accessibleDay=[];
 let fullDataX;
 let dataGraph=document.createElement("div");



 for (let i = 0; i < 1000; i++) {
    if(jsonDATA[i]){
        if(s == jsonDATA[i]["MixedCode"]){
        let splitingStr=jsonDATA[i]["CheckingOutData"];
       let cbvn=splitingStr.split(",");
       cbvn.pop();
       let cbvnLength=cbvn.length;
       let asss=0;
       let adss=1;

      while(cbvnLength>asss){
          allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
          //console.log(cbvn[asss+1]);
          asss=asss+2;
          
      }

      console.log(allDataYears);

      while(cbvnLength>adss){
        allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
          //console.log(cbvn[asss+1]);
          adss=adss+2;
          
      }
      console.log(allLateTime);
     
     let lastTimeYear=allDataYears[allDataYears.length -1];
     let indexOfSameYear=[];

     
     for (let sm = 0; sm < allDataYears.length; sm++) {
         if(allDataYears[sm] == lastTimeYear){
             //console.log(sm)
             indexOfSameYear.push(sm);
         }
     }

     let sameLateTimeData=[];

     for (let cb = 0; cb < indexOfSameYear.length; cb++) {
        sameLateTimeData.push(allLateTime[indexOfSameYear[cb]]);
      
     }

    
     //let lastTimeData=allLateTime[allLateTime.length -1];
     dataGraph.innerHTML=`<div id="dataTimeAllO">
     <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking Out Graph</h3>

     <div style="display:flex; cursor:pointer;" >
      <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwardsO(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
      <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      margin:auto;" id="correctDATEO">${lastTimeYear}</h4>
      <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goforwardsO(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
      </div>

      
     <div id="appendGraphO" style="width:100%;height:250px; 
     margin:auto;display:flex; position:relative;">

     <div style="postion:absolute; left:0px;
     width:20px;height:100%; background-color:rgb(218, 170, 74);color:black;
     writing-mode: vertical-rl; font-size:20px;
     font-family:Tahoma;">Extended Minutes</div>
     
     </div>

     <div style="width:100%;height:20px; background-color:rgb(218, 170, 74);color:black;
     writing-mode:horizontal-tb; ; font-size:20px;
     font-family:Tahoma;">Extended Time (In Minutes)</div>
     

     </div>`;
     

     docAddingGraph.appendChild(dataGraph);

     let graph=document.getElementById("appendGraphO");

    // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
     let smi=0;
     let margin_left=25;
     let graphHeight=0;

     var largest= 0;

     for (i=0; i<=largest;i++){
       if (parseInt(sameLateTimeData[i])>largest) {
         var largest=parseInt(sameLateTimeData[i]);
        }
     }


     console.log(largest)

      let multipyingNumber=0;
     let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
     let colorToUse;
    
     if(largest>0 && largest<10){
         multiplyingNumber=22;
         colorToUse=colorArr[0];
     }else if(largest>=10 && largest<20){
        multiplyingNumber=12.2;
        colorToUse=colorArr[1];
     }else if(largest>=20 && largest<30){
        multiplyingNumber=8.5;
        colorToUse=colorArr[2];
     }else if(largest>=30 && largest<40){
        multiplyingNumber=6.4;
        colorToUse=colorArr[3];
        
     }

     while(sameLateTimeData.length >smi){

        graphHeight=sameLateTimeData[smi]*multiplyingNumber;

        graph.innerHTML+=`<div 
        style="margin-right:10px;
        margin-left:${margin_left}px;
        width:20px; 
        background-image:${colorToUse}; 
        height:${graphHeight}px;
        position: absolute; 
        bottom:0px;
        color:black;
        writing-mode: vertical-rl; 
        font-size:20px;
        font-family:Tahoma;">
        ${sameLateTimeData[smi]}
        </div>
        
        `;

    
        margin_left=margin_left+30;

        smi++;
     }

     
    }
    }
 }

 }






}


function goBackwardsO(s){
   let graphDiv=document.getElementById("appendGraphO");

   graphDiv.parentNode.removeChild(graphDiv);

   let docAddingGraph=document.getElementById("opp");
    let newGraphDoc=document.createElement("div");
    let allDataYears=[];
    let allLateTime=[];
    let accessibleYears=[];
    let accessibleMonth=[];
    let accessibleDay=[];
    let fullDataX;
    let dataGraph=document.createElement("div");
    let pervoiusDate=document.getElementById("correctDATEO")
    
    
    for (let i = 0; i < 1000; i++) {
        if(jsonDATA[i]){
            if(s == jsonDATA[i]["MixedCode"]){
            let splitingStr=jsonDATA[i]["CheckingOutData"];
           let cbvn=splitingStr.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
           let adss=1;

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

          console.log(allDataYears);

          while(cbvnLength>adss){
            allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              adss=adss+2;
              
          }
          console.log(allLateTime);
         
         let pervYear;
         let IndexOfperviousYearArr=[];

         
         for (let sm = 0; sm < allDataYears.length; sm++) {
             if(allDataYears[sm] == pervoiusDate.innerText){
                 //console.log(sm);
                 IndexOfperviousYearArr.push(sm);
             }
         }

         if(IndexOfperviousYearArr[0]!=0){
            pervYear=IndexOfperviousYearArr[0]-1;
            console.log(pervYear);

            let yearsOfPerviousYearIndex=[];

            for (let i = 0; i < allDataYears.length; i++) {
                if(allDataYears[pervYear]==allDataYears[i])
                yearsOfPerviousYearIndex.push(i)
            }

            console.log(yearsOfPerviousYearIndex);

            let sameLateTimeData=[];

             for (let cb = 0; cb < yearsOfPerviousYearIndex.length; cb++) {
              sameLateTimeData.push(allLateTime[yearsOfPerviousYearIndex[cb]]);
          
         }

           console.log(sameLateTimeData)

           dataGraph.innerHTML=`<div id="dataTimeAllO">
           <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking Out Graph</h3>
          <div style="display:flex; cursor:pointer;" >
            <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwardsO(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
            <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin:auto;" id="correctDATEO">${allDataYears[pervYear]}</h4>
            <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goForwardsO(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
           </div>

 
           <div id="appendGraphO" style="width:100%;height:250px; 
            margin:auto;display:flex; position:relative;">

            <div style="postion:absolute; left:0px;
             width:20px;height:100%; background-color:rgb(218, 170, 74);color:black;
               writing-mode: vertical-rl; font-size:20px;
                font-family:Tahoma;">Extended Minutes</div>

              </div>

              <div style="width:100%;height:20px; background-color:rgb(218, 170, 74);color:black;
               writing-mode:horizontal-tb; ; font-size:20px;
               font-family:Tahoma;">Extended Time (In Minutes)</div>

            </div>`;

            let xcvs=document.getElementById("dataTimeAllO");
            xcvs.parentNode.removeChild(xcvs)


            docAddingGraph.appendChild(dataGraph);

            let graph=document.getElementById("appendGraphO");

           // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
           let smi=0;
           let margin_left=25;
           let graphHeight=0;

           var largest= 0;

           for (i=0; i<=largest;i++){
              if (parseInt(sameLateTimeData[i])>largest) {
                     var largest=parseInt(sameLateTimeData[i]);
                }
            }


            console.log(largest)


            let multipyingNumber=0;
             let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
            let colorToUse;

            if(largest>0 && largest<10){
              multiplyingNumber=22;
              colorToUse=colorArr[0];
              }else if(largest>=10 && largest<20){
                multiplyingNumber=12.2;
                colorToUse=colorArr[1];
              }else if(largest>=20 && largest<30){
                multiplyingNumber=8.5;
                colorToUse=colorArr[2];
              }else if(largest>=30 && largest<40){
                multiplyingNumber=6.4;
                colorToUse=colorArr[3];
              }
     

             while(sameLateTimeData.length >smi){

               graphHeight=sameLateTimeData[smi]*multiplyingNumber;

               graph.innerHTML+=`<div 
               style="margin-right:10px;
               margin-left:${margin_left}px;
               width:20px; 
               background-image:${colorToUse}; 
               height:${graphHeight}px;
               position: absolute; 
               bottom:0px;
               color:black;
               writing-mode: vertical-rl; 
               font-size:20px;
                font-family:Tahoma;">
               ${sameLateTimeData[smi]}
           </div>
            `;


            margin_left=margin_left+30;

            smi++;
      }
          
         }
 

        }
    }
    }

}

function goForwardsO(s){

    let graphDiv=document.getElementById("appendGraphO");

    //graphDiv.parentNode.removeChild(graphDiv);

    let docAddingGraph=document.getElementById("opp");
    let newGraphDoc=document.createElement("div");
    let allDataYears=[];
    let allLateTime=[];
    let accessibleYears=[];
    let accessibleMonth=[];
    let accessibleDay=[];
    let fullDataX;
    let dataGraph=document.createElement("div");
    let pervoiusDate=document.getElementById("correctDATEO")
 
 
 for (let i = 0; i < 1000; i++) {
     if(jsonDATA[i]){
        if(s == jsonDATA[i]["MixedCode"]){
         let splitingStr=jsonDATA[i]["CheckingOutData"];
        let cbvn=splitingStr.split(",");
        cbvn.pop();
        let cbvnLength=cbvn.length;
        let asss=0;
        let adss=1;

       while(cbvnLength>asss){
           allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
           //console.log(cbvn[asss+1]);
           asss=asss+2;
           
       }

       console.log(allDataYears);

       while(cbvnLength>adss){
         allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
           //console.log(cbvn[asss+1]);
           adss=adss+2;
           
       }
       console.log(allLateTime);
      
      let nextYear;
      let IndexOfperviousYearArr=[];

      
      for (let sm = 0; sm < allDataYears.length; sm++) {
          if(allDataYears[sm] == pervoiusDate.innerText){
              //console.log(sm);
              IndexOfperviousYearArr.push(sm);
          }
      }

     console.log(IndexOfperviousYearArr);

     let indexOfyearToGoBack=IndexOfperviousYearArr[IndexOfperviousYearArr.length - 1]+1;
     
     if(indexOfyearToGoBack != allDataYears.length){
         
        console.log("indexOfyearToGoBack "+indexOfyearToGoBack);
     
     let yearToGoBack=allDataYears[indexOfyearToGoBack];
     let dataW=[]

     for (let jkl = 0; jkl < allDataYears.length; jkl++) {
       if(yearToGoBack == allDataYears[jkl]){
           dataW.push(jkl)

       }
         
     }
     console.log(dataW);

     let gobackLateTime=[];
     let gf=0;

     while (dataW.length>gf){
        gobackLateTime.push(allLateTime[dataW[gf]]);
        gf++;
     }

     console.log(gobackLateTime);


     dataGraph.innerHTML=`<div id="dataTimeAllO">
     <h3 style="margin:auto; text-align:center;font-size:22px;text-decoration:underline;">Checking Out Graph</h3>
          <div style="display:flex; cursor:pointer;" >
            <h4 id="backwards" style="font-size:30px; margin:auto;" onclick="goBackwardsO(${jsonDATA[i]["MixedCode"]})"> ⭪ </h4>
            <h4 style="font-size:24px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin:auto;" id="correctDATEO">${yearToGoBack}</h4>
            <h4 id="forward" style="font-size:30px; margin:auto;" onclick="goForwardsO(${jsonDATA[i]["MixedCode"]})" > ⭬ </h4>
           </div>

 
           <div id="appendGraphO" style="width:100%;height:250px; 
            margin:auto;display:flex; position:relative;">

            <div style="postion:absolute; left:0px;
             width:20px;height:100%; background-color:rgb(218, 170, 74);color:black;
               writing-mode: vertical-rl; font-size:20px;
                font-family:Tahoma;">Extended Minutes</div>

              </div>

              <div style="width:100%;height:20px; background-color:rgb(218, 170, 74);color:black;
               writing-mode:horizontal-tb; ; font-size:20px;
               font-family:Tahoma;">Extended Time (In Minutes)</div>

            </div>`;

            let xcvs=document.getElementById("dataTimeAllO");
            xcvs.parentNode.removeChild(xcvs)


            docAddingGraph.appendChild(dataGraph);

            let graph=document.getElementById("appendGraphO");

          // graph.style=" position: absolute; width:20px; background-color:limegreen; height:50%;";
          let smi=0;
           let margin_left=25;
          let graphHeight=0;

          var largest= 0;

          for (i=0; i<=largest;i++){
             if (parseInt(gobackLateTime[i])>largest) {
               var largest=parseInt(gobackLateTime[i]);
             }
           }


            console.log(largest)


           let multipyingNumber=0;
           let colorArr=["linear-gradient(green,limegreen)","linear-gradient(yellow,green)","linear-gradient(green,yellow,red)","linear-gradient(red,orange)"];
           let colorToUse;

           if(largest>0 && largest<10){
            multiplyingNumber=22;
            colorToUse=colorArr[0];
            }else if(largest>=10 && largest<20){
             multiplyingNumber=12.2;
             colorToUse=colorArr[1];
             }else if(largest>=20 && largest<30){
               multiplyingNumber=8.5;
                 colorToUse=colorArr[2];
             }else if(largest>=30 && largest<40){
              multiplyingNumber=6.4;
               colorToUse=colorArr[3];
        }


           while(gobackLateTime.length >smi){

            graphHeight=gobackLateTime[smi]*multiplyingNumber;

             graph.innerHTML+=`<div 
             style="margin-right:10px;
             margin-left:${margin_left}px;
             width:20px; 
             background-image:${colorToUse}; 
             height:${graphHeight}px;
             position: absolute; 
             bottom:0px;
             color:black;
              writing-mode: vertical-rl; 
             font-size:20px;
             font-family:Tahoma;">
             ${gobackLateTime[smi]}
            </div>
            `;


            margin_left=margin_left+30;

             smi++;
         }


     }
 }


     }

     
 }


}

//member Week sorting graph
// checking In

function veiwMemberWeekInGraph(){

    let docAddingWeekGraph=document.getElementById("opp");
    let allDataYears=[];
    let allLateTime=[];

    for (let i = 0; i < 1000; i++) {
        if(jsonDATA[i]){
            let splitingStr=jsonDATA[i]["CheckingData"];
           let cbvn=splitingStr.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
           let adss=1;

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

          console.log(allDataYears);

          while(cbvnLength>adss){
            allLateTime.push(cbvn[adss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              adss=adss+2;
              
          }
          console.log(allLateTime);

          let pri=allDataYears.length;
          let yearsObj={}

          if(pri <= 5){
              yearsObj["week1"] =[allDataYears]

          }else if(pri >5){

            if(pri %5 == 0){
                let numYears=pri/5;
                let num=1;
                let s=5;
               
                //console.log("we can do it direct " + numYears);
                
                while(numYears>num) {
                    yearsObj["week"+num] = [allDataYears.slice(0,s)]
                        
                    num++;
                    
                }

                
            }

          }

          console.log(yearsObj)
            
        }
    }


}

//checking Out
function veiwMemberWeekOutGraph(){
    
}


//apply sortby option selected
function applyChangeOnGraph() {
    let asz=document.getElementById("sel");
    //console.log(asz.value);

    let checkInGraph=document.getElementById("dataTimeAll");
    let checkOutGraph=document.getElementById("dataTimeAllO");

    if(asz.value=="Day"){
        if(!checkInGraph && !checkOutGraph){
            veiwMemberGraph();
            veiwMemberCheckOutGraph();
            
        }
    }else if(asz.value=="Week"){
        if(checkInGraph && checkOutGraph){
            checkInGraph.parentNode.removeChild(checkInGraph);
            checkOutGraph.parentNode.removeChild(checkOutGraph);

            veiwMemberWeekInGraph();
            veiwMemberWeekOutGraph();
            
        }

    }



}

//searching for a member in the search bar
function searchForMember(){
    let inputSearch=document.getElementById("searchForMember");
    let aTagScroll=document.getElementById("aTagScroll");

    let value = inputSearch.value.trim().toLowerCase();
    var list = document.getElementsByTagName("TBODY");
    let i=0;
    
    if(list.length >0 ){

     while (list.length > i) {
         if(list[i].id.trim().toLowerCase().includes(value)){
            aTagScroll.href="#"+list[i].id;
         }
        i++;
        
     }

    }
    
}

var xValues =["0-5", "6-10", "11-15", "16-20", "21-25","26-30","31-35","36-40"];
var dateAdd;
var yValues=[0,0,0,0,0,0,0,0]; 

//sorting well function 
// Function to perform sort
function string_sort(str) {
    var i = 0, j;
    while (i < str.length) {
        j = i + 1;
        while (j < str.length) {
            if (str[j] < str[i]) {
                var temp = str[i];
                str[i] = str[j];
                str[j] = temp;
            }
            j++;
        }
        i++;
    }
}


//display overal members graph of the organisation
function veiwAllMembersGraph(){
    let body=document.getElementById("body");
    let ovaralGraph=document.createElement("div");
   
    ovaralGraph.style="overflow:auto;width:90%;height:90%;background-color:honeydew;margin:auto;position:absolute; top:20px; right:20px;left:20px;bottom:20px;";
    ovaralGraph.id="ord"
    var numberOfMembInDatabase=1000;
    let splitingStr=",";
    let allDataYears=[];
    let allLateTime=[];
    
    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
           splitingStr+=jsonDATA[i]["CheckingData"].replace(/[\[']+/g,'');

           let str=jsonDATA[i]["CheckingData"];
           let cbvn=str.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
          

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

        }
    }
    
    let ar=splitingStr.split("]");
    ar.pop();
    ar.sort();
    let arr=[];

    for (let i = 0; i < ar.length; i++) {
        arr.push(ar[i].substring(1));
       
    }

   // console.log(arr);

    let obj={};
    let d=0;
    
    while(arr.length > d){
        let f=arr[d].split(",");
        obj[d]=f;
        d++;
    }
    
    let h={};
    let r={};
   

    for (const key in obj) {
        if (Object.hasOwnProperty.call(obj, key)) {
            if(obj[key][0]  == obj[key][0]){
                h[obj[key][0]]+=","+obj[key][1];
            }
            
            for (const keyy in h) {
              if (Object.hasOwnProperty.call(h, keyy)) {
                let u=h[keyy].split(",");
                u.shift();
                // console.log(u);
                r[obj[key][0]]=u;

              }
            }

        }
    }

    let years=[...new Set(allDataYears)];
    
    string_sort(years);

    //console.log(r);
    ///console.log(years);
    dateAdd=years[years.length -1];

    //let nextDayData=years[years.length -2];

    let gh=years[years.length -1];


    let ti=r[gh];
    let time=[];
    
    for (let i = 0; i < ti.length; i++) {
       time.push(parseInt(ti[i]));
        
    }

    let bv=[];let bv1=[];let bv2=[];let bv3=[];let bv4=[];let bv5=[];let bv6=[];let bv7=[];
   
    let sum=0;let sum1=0;let sum2=0;let sum3=0;let sum4=0;let sum5=0;let sum6=0;let sum7=0;

    for (let i = 0; i < time.length; i++) {
       if(time[i] <= 5){
        bv.push(time[i]);
        sum=Math.round((bv.reduce((a, b) => a + b, 0))/bv.length);
        
        yValues[0]=sum;

       }else if(time[i] >=6 && time[i] <= 10){
        bv1.push(time[i]);
        sum1=Math.round((bv1.reduce((a, b) => a + b, 0))/bv1.length);

        yValues[1]=sum1;

       }else if(time[i] >=11 && time[i] <= 15){
        bv2.push(time[i]);
        sum2=Math.round((bv2.reduce((a, b) => a + b, 0))/bv2.length);

        yValues[2]=sum2;

       }else if(time[i] >=16 && time[i] <= 20){
        bv3.push(time[i]);
        sum3=Math.round((bv3.reduce((a, b) => a + b, 0))/bv3.length);

        yValues[3]=sum3;

       }else if(time[i] >=21 && time[i] <= 25){
        bv4.push(time[i]);
        sum4=Math.round((bv4.reduce((a, b) => a + b, 0))/bv4.length);

        yValues[4]=sum4;

       }else if(time[i] >=26 && time[i] <= 30){
        bv5.push(time[i]);
        sum5=Math.round((bv5.reduce((a, b) => a + b, 0))/bv5.length);

        yValues[5]=sum5;

       }else if(time[i] >=31 && time[i] <= 35){
        bv6.push(time[i]);
        sum6=Math.round((bv6.reduce((a, b) => a + b, 0))/bv6.length);

        yValues[6]=sum6;

       }else if(time[i] >=36 && time[i] <= 40){
        bv7.push(time[i]);
        sum7=Math.round((bv7.reduce((a, b) => a + b, 0))/bv7.length);

        yValues[7]=sum7;

       }

        
    }

    

    let nextDayData=years[years.length -2];
    var yValuesx=[0,0,0,0,0,0,0,0]; 

    let tix=r[nextDayData];
    let timex=[];
    
    for (let i = 0; i < tix.length; i++) {
       timex.push(parseInt(tix[i]));
        
    }

    let bvx=[];let bv1x=[];let bv2x=[];let bv3x=[];let bv4x=[];let bv5x=[];let bv6x=[];let bv7x=[];
   
    let sumx=0;let sum1x=0;let sum2x=0;let sum3x=0;let sum4x=0;let sum5x=0;let sum6x=0;let sum7x=0;
   


    for (let i = 0; i < timex.length; i++) {
       if(timex[i] <= 5){
        bvx.push(timex[i]);
        sumx=Math.round((bvx.reduce((a, b) => a + b, 0))/bvx.length);
        
        yValuesx[0]=sumx;

       }else if(timex[i] >=6 && timex[i] <= 10){
        bv1x.push(timex[i]);
        sum1x=Math.round((bv1x.reduce((a, b) => a + b, 0))/bv1x.length);

        yValuesx[1]=sum1x;

       }else if(timex[i] >=11 && timex[i] <= 15){
        bv2x.push(timex[i]);
        sum2x=Math.round((bv2x.reduce((a, b) => a + b, 0))/bv2x.length);

        yValuesx[2]=sum2x;

       }else if(timex[i] >=16 && timex[i] <= 20){
        bv3x.push(timex[i]);
        sum3x=Math.round((bv3x.reduce((a, b) => a + b, 0))/bv3x.length);

        yValuesx[3]=sum3x;

       }else if(timex[i] >=21 && timex[i] <= 25){
        bv4x.push(timex[i]);
        sum4x=Math.round((bv4x.reduce((a, b) => a + b, 0))/bv4x.length);

        yValuesx[4]=sum4x;

       }else if(timex[i] >=26 && timex[i] <= 30){
        bv5x.push(timex[i]);
        sum5x=Math.round((bv5x.reduce((a, b) => a + b, 0))/bv5x.length);

        yValuesx[5]=sum5x;

       }else if(timex[i] >=31 && timex[i] <= 35){
        bv6x.push(timex[i]);
        sum6x=Math.round((bv6x.reduce((a, b) => a + b, 0))/bv6x.length);

        yValuesx[6]=sum6x;

       }else if(timex[i] >=36 && timex[i] <= 40){
        bv7x.push(timex[i]);
        sum7x=Math.round((bv7x.reduce((a, b) => a + b, 0))/bv7x.length);

        yValuesx[7]=sum7x;

       }

        
    }


   // console.log(time)
   // console.log(yValues);
    
    ovaralGraph.innerHTML=`
     <h4 style="font-size:2.5em;margin:auto;color:red;position:absolute;top:0;right:0;cursor:pointer;" onclick="closeOveralGraph()">X</h4>
     <h3 style="text-align:center; font-size:25px;margin:auto;">Overall Member Graph</h3>
     <div style="display:flex;" id="orl">

     <h4 style="font-size:30px; margin:auto; cursor:pointer;width:auto;" onclick="forFUJ();fujX(${yValuesx});">⭪ </h4>

     <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;"></canvas>

     <h4 style="font-size:30px; margin:auto; cursor:pointer; width:auto;" onclick="backFUJ()">⭬ </h4>


     </div>
     <input type="text" style="visibility:hidden;" id="wsd" value="${dateAdd}">
    `;
    
  
    body.appendChild(ovaralGraph);

    //setTimeout(() => {
          showMoreData();
   // }, 50);
    

}

function fuj(){
    var barColors = ["green", "limegreen","lime","yellow","orange","brown","rgb(236, 112, 99)","red"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
         datasets: [{
          backgroundColor: barColors,
         data: yValues
        }]
      },
     options: {
       legend: {display: false},
       title: {
         display: true,
         text: "Overall Checking In For : " + dateAdd
      }
     }
   });

}

function forFUJ(){
    let x=document.getElementById("orl");
    x.parentNode.removeChild(x);
    var yValuesx=[0,0,0,0,0,0,0,0]; 

    let ovaralGraph=document.getElementById("ord");
    let wsd=document.getElementById("wsd").value;

    var numberOfMembInDatabase=1000;
    let splitingStr=",";
    let allDataYears=[];
    let allLateTime=[];
    
    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
           splitingStr+=jsonDATA[i]["CheckingData"].replace(/[\[']+/g,'');

           let str=jsonDATA[i]["CheckingData"];
           let cbvn=str.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
          

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

        }
    }
    
    let ar=splitingStr.split("]");
    ar.pop();
    ar.sort();
    let arr=[];

    for (let i = 0; i < ar.length; i++) {
        arr.push(ar[i].substring(1));
       
    }

    //console.log(arr);

    let obj={};
    let d=0;
    
    while(arr.length > d){
        let f=arr[d].split(",");
        obj[d]=f;
        d++;
    }
    
    let h={};
    let r={};
   

    for (const key in obj) {
        if (Object.hasOwnProperty.call(obj, key)) {
            if(obj[key][0]  == obj[key][0]){
                h[obj[key][0]]+=","+obj[key][1];
            }
            
            for (const keyy in h) {
              if (Object.hasOwnProperty.call(h, keyy)) {
                let u=h[keyy].split(",");
                u.shift();
                // console.log(u);
                r[obj[key][0]]=u;

              }
            }

        }
    }

    let years=[...new Set(allDataYears)];
    string_sort(years);

   
    console.log(r);
    console.log(years);
   
   if(wsd == years[0]){
       
    dateAdd=years[years.indexOf(wsd)];
   
    let ti=r[dateAdd];
    let time=[];
    
    for (let i = 0; i < ti.length; i++) {
       time.push(parseInt(ti[i]));
        
    }

    let bv=[];let bv1=[];let bv2=[];let bv3=[];let bv4=[];let bv5=[];let bv6=[];let bv7=[];
   
    let sum=0;let sum1=0;let sum2=0;let sum3=0;let sum4=0;let sum5=0;let sum6=0;let sum7=0;
   


    for (let i = 0; i < time.length; i++) {
       if(time[i] <= 5){
        bv.push(time[i]);
        sum=Math.round((bv.reduce((a, b) => a + b, 0))/bv.length);
        
        yValuesx[0]=sum;

       }else if(time[i] >=6 && time[i] <= 10){
        bv1.push(time[i]);
        sum1=Math.round((bv1.reduce((a, b) => a + b, 0))/bv1.length);

        yValuesx[1]=sum1;

       }else if(time[i] >=11 && time[i] <= 15){
        bv2.push(time[i]);
        sum2=Math.round((bv2.reduce((a, b) => a + b, 0))/bv2.length);

        yValuesx[2]=sum2;

       }else if(time[i] >=16 && time[i] <= 20){
        bv3.push(time[i]);
        sum3=Math.round((bv3.reduce((a, b) => a + b, 0))/bv3.length);

        yValuesx[3]=sum3;

       }else if(time[i] >=21 && time[i] <= 25){
        bv4.push(time[i]);
        sum4=Math.round((bv4.reduce((a, b) => a + b, 0))/bv4.length);

        yValuesx[4]=sum4;

       }else if(time[i] >=26 && time[i] <= 30){
        bv5.push(time[i]);
        sum5=Math.round((bv5.reduce((a, b) => a + b, 0))/bv5.length);

        yValuesx[5]=sum5;

       }else if(time[i] >=31 && time[i] <= 35){
        bv6.push(time[i]);
        sum6=Math.round((bv6.reduce((a, b) => a + b, 0))/bv6.length);

        yValuesx[6]=sum6;

       }else if(time[i] >=36 && time[i] <= 40){
        bv7.push(time[i]);
        sum7=Math.round((bv7.reduce((a, b) => a + b, 0))/bv7.length);

        yValuesx[7]=sum7;

       }

        
    }

    
    
    ovaralGraph.innerHTML=`
     <h4 style="font-size:2.5em;margin:auto;color:red;position:absolute;top:0;right:0;cursor:pointer;" onclick="closeOveralGraph()">X</h4>
     <h3 style="text-align:center; font-size:25px;margin:auto;">Overall Member Graph</h3>
     <div style="display:flex;" id="orl">

     <h4 style="font-size:30px; margin:auto; cursor:pointer;width:auto;" onclick="forFUJ();fujX(${yValuesx});">⭪ </h4>

     <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;"></canvas>

     <h4 style="font-size:30px; margin:auto; cursor:pointer; width:auto;" onclick="backFUJ()">⭬ </h4>

     </div>
     <input type="text" style="visibility:hidden;" id="wsd" value="${dateAdd}">
    `;

   }else {

    dateAdd=years[years.indexOf(wsd)-1];
    let se=years[years.indexOf(wsd)-2];
    
    if(se == undefined){
        se= years[0];
    }
    let ti=r[se];
    //console.log(ti);
    let time=[];
    
    for (let i = 0; i < ti.length; i++) {
       time.push(parseInt(ti[i]));
        
    }

    let bv=[];
    let bv1=[];
    let bv2=[];
    let bv3=[];
    let bv4=[];
    let bv5=[];
    let bv6=[];
    let bv7=[];
   
    let sum=0;
    let sum1=0;
    let sum2=0;
    let sum3=0;
    let sum4=0;
    let sum5=0;
    let sum6=0;
    let sum7=0;
   


    for (let i = 0; i < time.length; i++) {
       if(time[i] <= 5){
        bv.push(time[i]);
        sum=Math.round((bv.reduce((a, b) => a + b, 0))/bv.length);
        
        yValuesx[0]=sum;

       }else if(time[i] >=6 && time[i] <= 10){
        bv1.push(time[i]);
        sum1=Math.round((bv1.reduce((a, b) => a + b, 0))/bv1.length);

        yValuesx[1]=sum1;

       }else if(time[i] >=11 && time[i] <= 15){
        bv2.push(time[i]);
        sum2=Math.round((bv2.reduce((a, b) => a + b, 0))/bv2.length);

        yValuesx[2]=sum2;

       }else if(time[i] >=16 && time[i] <= 20){
        bv3.push(time[i]);
        sum3=Math.round((bv3.reduce((a, b) => a + b, 0))/bv3.length);

        yValuesx[3]=sum3;

       }else if(time[i] >=21 && time[i] <= 25){
        bv4.push(time[i]);
        sum4=Math.round((bv4.reduce((a, b) => a + b, 0))/bv4.length);

        yValuesx[4]=sum4;

       }else if(time[i] >=26 && time[i] <= 30){
        bv5.push(time[i]);
        sum5=Math.round((bv5.reduce((a, b) => a + b, 0))/bv5.length);

        yValuesx[5]=sum5;

       }else if(time[i] >=31 && time[i] <= 35){
        bv6.push(time[i]);
        sum6=Math.round((bv6.reduce((a, b) => a + b, 0))/bv6.length);

        yValuesx[6]=sum6;

       }else if(time[i] >=36 && time[i] <= 40){
        bv7.push(time[i]);
        sum7=Math.round((bv7.reduce((a, b) => a + b, 0))/bv7.length);

        yValuesx[7]=sum7;

       }

        
    }

    //console.log("time " +time)
    //console.log(yValuesx);
    
    
    
    ovaralGraph.innerHTML=`
    <h4 style="font-size:2.5em;margin:auto;color:red;position:absolute;top:0;right:0;cursor:pointer;" onclick="closeOveralGraph()">X</h4>
     <h3 style="text-align:center; font-size:25px;margin:auto;">Overall Member Graph</h3>
     <div style="display:flex;" id="orl">

     <h4 style="font-size:30px; margin:auto; cursor:pointer;width:auto;" onclick="forFUJ();fujX(${yValuesx});">⭪ </h4>

     <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;"></canvas>

     <h4 style="font-size:30px; margin:auto; cursor:pointer; width:auto;" onclick="backFUJ()">⭬ </h4>

     </div>
     <input type="text" style="visibility:hidden;" id="wsd" value="${dateAdd}">
    `;

   }
    
   showMoreData()

}

function fujX(...y){
    console.log(y)
    var barColors = ["green", "limegreen","lime","yellow","orange","brown","rgb(236, 112, 99)","red"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
         datasets: [{
          backgroundColor: barColors,
         data: y
        }]
      },
     options: {
       legend: {display: false},
       title: {
         display: true,
         text: "Overall Checking In For : " + dateAdd
      }
     }
   });
}

function closeOveralGraph(){
  let ord=document.getElementById("ord");
  ord.parentNode.removeChild(ord);
}

let dateAddB;

function backFUJ(){
    let body=document.getElementById("body");
    let x=document.getElementById("orl");
    x.parentNode.removeChild(x);
    var yValuesB=[0,0,0,0,0,0,0,0]; 

    let ovaralGraph=document.getElementById("ord");
    let wsd=document.getElementById("wsd").value;

    var numberOfMembInDatabase=1000;
    let splitingStr=",";
    let allDataYears=[];
    let allLateTime=[];
    
    
    for (let i = 0; i < numberOfMembInDatabase; i++) {
        if(jsonDATA[i]){
           splitingStr+=jsonDATA[i]["CheckingData"].replace(/[\[']+/g,'');

           let str=jsonDATA[i]["CheckingData"];
           let cbvn=str.split(",");
           cbvn.pop();
           let cbvnLength=cbvn.length;
           let asss=0;
          

          while(cbvnLength>asss){
              allDataYears.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
          }

        }
    }
    
    let ar=splitingStr.split("]");
    ar.pop();
    ar.sort();
    let arr=[];

    for (let i = 0; i < ar.length; i++) {
        arr.push(ar[i].substring(1));
       
    }

    //console.log(arr);

    let obj={};
    let d=0;
    
    while(arr.length > d){
        let f=arr[d].split(",");
        obj[d]=f;
        d++;
    }
    
    let h={};
    let r={};
   

    for (const key in obj) {
        if (Object.hasOwnProperty.call(obj, key)) {
            if(obj[key][0]  == obj[key][0]){
                h[obj[key][0]]+=","+obj[key][1];
            }
            
            for (const keyy in h) {
              if (Object.hasOwnProperty.call(h, keyy)) {
                let u=h[keyy].split(",");
                u.shift();
                // console.log(u);
                r[obj[key][0]]=u;

              }
            }

        }
    }

    let years=[...new Set(allDataYears)];
    string_sort(years);

   
   if(wsd == years[years.length-1]){
        
    dateAddB=years[years.indexOf(wsd)];
    //console.log(dateAddB);
   
    let ti=r[dateAddB];
    console.log("ti "+ti);
    let time=[];
    
    for (let i = 0; i < ti.length; i++) {
       time.push(parseInt(ti[i]));
        
    }

    let bv=[];let bv1=[];let bv2=[];let bv3=[];let bv4=[];let bv5=[];let bv6=[];let bv7=[];
   
    let sum=0;let sum1=0;let sum2=0;let sum3=0;let sum4=0;let sum5=0;let sum6=0;let sum7=0;
   


    for (let i = 0; i < time.length; i++) {
       if(time[i] <= 5){
        bv.push(time[i]);
        sum=Math.round((bv.reduce((a, b) => a + b, 0))/bv.length);
        
        yValuesB[0]=sum;

       }else if(time[i] >=6 && time[i] <= 10){
        bv1.push(time[i]);
        sum1=Math.round((bv1.reduce((a, b) => a + b, 0))/bv1.length);

        yValuesB[1]=sum1;

       }else if(time[i] >=11 && time[i] <= 15){
        bv2.push(time[i]);
        sum2=Math.round((bv2.reduce((a, b) => a + b, 0))/bv2.length);

        yValuesB[2]=sum2;

       }else if(time[i] >=16 && time[i] <= 20){
        bv3.push(time[i]);
        sum3=Math.round((bv3.reduce((a, b) => a + b, 0))/bv3.length);

        yValuesB[3]=sum3;

       }else if(time[i] >=21 && time[i] <= 25){
        bv4.push(time[i]);
        sum4=Math.round((bv4.reduce((a, b) => a + b, 0))/bv4.length);

        yValuesB[4]=sum4;

       }else if(time[i] >=26 && time[i] <= 30){
        bv5.push(time[i]);
        sum5=Math.round((bv5.reduce((a, b) => a + b, 0))/bv5.length);

        yValuesB[5]=sum5;

       }else if(time[i] >=31 && time[i] <= 35){
        bv6.push(time[i]);
        sum6=Math.round((bv6.reduce((a, b) => a + b, 0))/bv6.length);

        yValuesB[6]=sum6;

       }else if(time[i] >=36 && time[i] <= 40){
        bv7.push(time[i]);
        sum7=Math.round((bv7.reduce((a, b) => a + b, 0))/bv7.length);

        yValuesB[7]=sum7;

       }

        
    }

    //console.log("r "+yValuesB);\

    let nextDayData=years[years.length -2];
    var yValuesx=[0,0,0,0,0,0,0,0]; 

    let tix=r[nextDayData];
    let timex=[];
    
    for (let i = 0; i < tix.length; i++) {
       timex.push(parseInt(tix[i]));
        
    }

    let bvx=[];let bv1x=[];let bv2x=[];let bv3x=[];let bv4x=[];let bv5x=[];let bv6x=[];let bv7x=[];
   
    let sumx=0;let sum1x=0;let sum2x=0;let sum3x=0;let sum4x=0;let sum5x=0;let sum6x=0;let sum7x=0;
   


    for (let i = 0; i < timex.length; i++) {
       if(timex[i] <= 5){
        bvx.push(timex[i]);
        sumx=Math.round((bvx.reduce((a, b) => a + b, 0))/bvx.length);
        
        yValuesx[0]=sumx;

       }else if(timex[i] >=6 && timex[i] <= 10){
        bv1x.push(timex[i]);
        sum1x=Math.round((bv1x.reduce((a, b) => a + b, 0))/bv1x.length);

        yValuesx[1]=sum1x;

       }else if(timex[i] >=11 && timex[i] <= 15){
        bv2x.push(timex[i]);
        sum2x=Math.round((bv2x.reduce((a, b) => a + b, 0))/bv2x.length);

        yValuesx[2]=sum2x;

       }else if(timex[i] >=16 && timex[i] <= 20){
        bv3x.push(timex[i]);
        sum3x=Math.round((bv3x.reduce((a, b) => a + b, 0))/bv3x.length);

        yValuesx[3]=sum3x;

       }else if(timex[i] >=21 && timex[i] <= 25){
        bv4x.push(timex[i]);
        sum4x=Math.round((bv4x.reduce((a, b) => a + b, 0))/bv4x.length);

        yValuesx[4]=sum4x;

       }else if(timex[i] >=26 && timex[i] <= 30){
        bv5x.push(timex[i]);
        sum5x=Math.round((bv5x.reduce((a, b) => a + b, 0))/bv5x.length);

        yValuesx[5]=sum5x;

       }else if(timex[i] >=31 && timex[i] <= 35){
        bv6x.push(timex[i]);
        sum6x=Math.round((bv6x.reduce((a, b) => a + b, 0))/bv6x.length);

        yValuesx[6]=sum6x;

       }else if(timex[i] >=36 && timex[i] <= 40){
        bv7x.push(timex[i]);
        sum7x=Math.round((bv7x.reduce((a, b) => a + b, 0))/bv7x.length);

        yValuesx[7]=sum7x;

       }

        
    }


    //console.log(time)
    //console.log(yValues);
    
    ovaralGraph.innerHTML=`
     <h3 style="text-align:center; font-size:25px;margin:auto;">Overall Member Graph</h3>
     <div style="display:flex;" id="orl">

     <h4 style="font-size:30px; margin:auto; cursor:pointer;width:auto;" onclick="forFUJ();fujX(${yValuesx});">⭪ </h4>

     <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;"></canvas>

     <h4 style="font-size:30px; margin:auto; cursor:pointer; width:auto;" onclick="backFUJ()">⭬ </h4>

     </div>
     <input type="text" style="visibility:hidden;" id="wsd" value="${dateAdd}">
     `;
     showMoreData();

    body.appendChild(ovaralGraph);

    backGraph(...yValuesB);
    

   }else{
     console.log(years.indexOf(wsd))
    //dateAddB=years[years.indexOf(wsd)+1];

    dateAddB=years[years.indexOf(wsd)+1];
    
    let ti=r[dateAddB];
   
    let time=[];
    
    for (let i = 0; i < ti.length; i++) {
       time.push(parseInt(ti[i]));
        
    }

    console.log("ti "+time);

    let bv=[];let bv1=[];let bv2=[];let bv3=[];let bv4=[];let bv5=[];let bv6=[];let bv7=[];
   
    let sum=0;let sum1=0;let sum2=0;let sum3=0;let sum4=0;let sum5=0;let sum6=0;let sum7=0;


    for (let i = 0; i < time.length; i++) {
       if(time[i] <= 5){
        bv.push(time[i]);
        sum=Math.round((bv.reduce((a, b) => a + b, 0))/bv.length);
        
        yValuesB[0]=sum;

       }else if(time[i] >=6 && time[i] <= 10){
        bv1.push(time[i]);
        sum1=Math.round((bv1.reduce((a, b) => a + b, 0))/bv1.length);

        yValuesB[1]=sum1;

       }else if(time[i] >=11 && time[i] <= 15){
        bv2.push(time[i]);
        sum2=Math.round((bv2.reduce((a, b) => a + b, 0))/bv2.length);

        yValuesB[2]=sum2;

       }else if(time[i] >=16 && time[i] <= 20){
        bv3.push(time[i]);
        sum3=Math.round((bv3.reduce((a, b) => a + b, 0))/bv3.length);

        yValuesB[3]=sum3;

       }else if(time[i] >=21 && time[i] <= 25){
        bv4.push(time[i]);
        sum4=Math.round((bv4.reduce((a, b) => a + b, 0))/bv4.length);

        yValuesB[4]=sum4;

       }else if(time[i] >=26 && time[i] <= 30){
        bv5.push(time[i]);
        sum5=Math.round((bv5.reduce((a, b) => a + b, 0))/bv5.length);

        yValuesB[5]=sum5;

       }else if(time[i] >=31 && time[i] <= 35){
        bv6.push(time[i]);
        sum6=Math.round((bv6.reduce((a, b) => a + b, 0))/bv6.length);

        yValuesB[6]=sum6;

       }else if(time[i] >=36 && time[i] <= 40){
        bv7.push(time[i]);
        sum7=Math.round((bv7.reduce((a, b) => a + b, 0))/bv7.length);

        yValuesB[7]=sum7;

       }

        
    }

    // fujX data extract

    let nextDayData=years[years.indexOf(wsd) -1];
    console.log("index "+years.indexOf(wsd))
    var yValuesx=[0,0,0,0,0,0,0,0]; 

    let tix=r[nextDayData];
    let timex=[];
    console.log("tix " +tix)

    if(years.indexOf(wsd) === exernalFun(years.indexOf(wsd))){
        tix = r[years[exernalFun(years.indexOf(wsd))]]
    }

    for (let i = 0; i < tix.length; i++) {
       timex.push(parseInt(tix[i]));
        
    }

    let bvx=[];let bv1x=[];let bv2x=[];let bv3x=[];let bv4x=[];let bv5x=[];let bv6x=[];let bv7x=[];
   
    let sumx=0;let sum1x=0;let sum2x=0;let sum3x=0;let sum4x=0;let sum5x=0;let sum6x=0;let sum7x=0;
   

    for (let i = 0; i < timex.length; i++) {
       if(timex[i] <= 5){
        bvx.push(timex[i]);
        sumx=Math.round((bvx.reduce((a, b) => a + b, 0))/bvx.length);
        
        yValuesx[0]=sumx;

       }else if(timex[i] >=6 && timex[i] <= 10){
        bv1x.push(timex[i]);
        sum1x=Math.round((bv1x.reduce((a, b) => a + b, 0))/bv1x.length);

        yValuesx[1]=sum1x;

       }else if(timex[i] >=11 && timex[i] <= 15){
        bv2x.push(timex[i]);
        sum2x=Math.round((bv2x.reduce((a, b) => a + b, 0))/bv2x.length);

        yValuesx[2]=sum2x;

       }else if(timex[i] >=16 && timex[i] <= 20){
        bv3x.push(timex[i]);
        sum3x=Math.round((bv3x.reduce((a, b) => a + b, 0))/bv3x.length);

        yValuesx[3]=sum3x;

       }else if(timex[i] >=21 && timex[i] <= 25){
        bv4x.push(timex[i]);
        sum4x=Math.round((bv4x.reduce((a, b) => a + b, 0))/bv4x.length);

        yValuesx[4]=sum4x;

       }else if(timex[i] >=26 && timex[i] <= 30){
        bv5x.push(timex[i]);
        sum5x=Math.round((bv5x.reduce((a, b) => a + b, 0))/bv5x.length);

        yValuesx[5]=sum5x;

       }else if(timex[i] >=31 && timex[i] <= 35){
        bv6x.push(timex[i]);
        sum6x=Math.round((bv6x.reduce((a, b) => a + b, 0))/bv6x.length);

        yValuesx[6]=sum6x;

       }else if(timex[i] >=36 && timex[i] <= 40){
        bv7x.push(timex[i]);
        sum7x=Math.round((bv7x.reduce((a, b) => a + b, 0))/bv7x.length);

        yValuesx[7]=sum7x;

       }

        
    }


    ovaralGraph.innerHTML=`
     <h4 style="font-size:2.5em;margin:auto;color:red;position:absolute;top:0;right:0;cursor:pointer;" onclick="closeOveralGraph()">X</h4>
     <h3 style="text-align:center; font-size:25px;margin:auto;">Overall Member Graph</h3>
     <div style="display:flex;" id="orl">

     <h4 style="font-size:30px; margin:auto; cursor:pointer;width:auto;" onclick="forFUJ();fujX(${yValuesx});">⭪ </h4>

     <canvas id="myChart" style="width:100%;max-width:700px;margin:auto;"></canvas>

     <h4 style="font-size:30px; margin:auto; cursor:pointer; width:auto;" onclick="backFUJ()">⭬ </h4>

     </div>
     <input type="text" style="visibility:hidden;" id="wsd" value="${dateAddB}">
     `;
    showMoreData();

    body.appendChild(ovaralGraph);

    backGraph(...yValuesB);
    

   }
  
   
}

function exernalFun(a){
    switch (a) {
        case 0:
            return 0;
            break;
        case 1:
            return 1;
            break;
        case 2:
            return 2;
            break;
        case 3:
            return 3;
            break; 
        case 4:
            return 4;
            break;  
        case 5:
            return 5;
            break; 
        case 6:
            return 6;
            break; 
        case 7:
            return 7;
            break; 
        case 8:
            return 8;
            break; 
        case 9:
            return 9;
            break; 
        case 10:
            return 10;
            break; 
        case 11:
            return 11;
            break; 
        case 12:
            return 12;
            break; 
        case 13:
            return 13;
            break; 
        case 14:
            return 14;
            break; 
        case 15:
            return 15;
            break; 
        case 16:
            return 16;
            break; 
        case 17:
            return 17;
            break; 
        case 18:
            return 18;
            break; 
        case 19:
            return 19;
            break; 
        case 20:
            return 20;
            break; 
        case 21:
            return 21;
            break;
        case 22:
            return 22;
            break;
        case 23:
            return 23;
            break;
        case 24:
            return 24;
            break; 
        case 25:
            return 25;
            break;  
        case 26:
            return 26;
            break; 
        case 27:
            return 27;
            break; 
        case 28:
            return 28;
            break; 
        case 29:
            return 29;
            break; 
        case 30:
            return 30;
            break; 
        case 31:
            return 31;
            break; 
        case 32:
            return 32;
            break; 
        case 33:
            return 33;
            break; 
        case 34:
            return 34;
            break; 
        case 35:
            return 35;
            break; 
        case 36:
            return 36;
            break; 
        case 37:
            return 37;
            break; 
        case 38:
            return 38;
            break; 
        case 39:
            return 39;
            break; 
        case 40:
            return 40;
            break; 
        case 41:
            return 41;
            break; 
        case 42:
            return 42;
            break; 
        case 43:
            return 43;
            break; 
        case 44:
            return 44;
            break; 
        case 45:
            return 45;
            break; 
        case 46:
            return 46;
            break; 
        case 47:
            return 47;
            break; 
        case 48:
            return 48;
            break; 
        case 49:
            return 49;
            break; 
        case 50:
            return 50;
            break; 
        
        
    }

}

function backGraph(...u){
    var barColors = ["green", "limegreen","lime","yellow","orange","brown","rgb(236, 112, 99)","red"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
         datasets: [{
          backgroundColor: barColors,
         data: u
        }]
      },
     options: {
       legend: {display: false},
       title: {
         display: true,
         text: "Overall Checking In For : " + dateAddB
      }
     }
   });

}



function showMoreData(){
    let od=document.getElementById("ord");
    let body=document.getElementById("body");
    let datetext=document.getElementById("wsd").value;
    let rhfts=document.getElementById("rhfts")

 if(!rhfts){


    let dataArray=[];

    for (let i = 0; i < 10000; i++) {
        if(jsonDATA[i]){
           dataArray.push([jsonDATA[i]["FullName"],jsonDATA[i]["CheckingData"],jsonDATA[i]["IdentityCode"]]);
        }
    }

    //console.log(dataArray);
    let dcv=[];let arr=[];let lengths=[];let dxw=0;

  for (let i = 0; i < dataArray.length; i++) {
        let cbvn=dataArray[i][1].split(",");
        cbvn.pop();
        let cbvnLength=cbvn.length;
        let asss=0;

    while(cbvnLength>asss){
              dcv.push(cbvn[asss].replace(/[\[\]']+/g,''));
              //console.log(cbvn[asss+1]);
              asss=asss+2;
              
    }

    let ar=dataArray[i][1].replace(/[\[']+/g,'').split("]");
    ar.pop();
    ar.sort();
    ar[ar.length-1]=","+ar[ar.length-1];

    //console.log(ar)


   for (let k = 0; k < dataArray.length; k++) {
        dataArray[i].splice(1,1,ar); 
    }

    //let years=[...new Set(dcv)];
    
    //string_sort(years);

    
  }
    
   //console.log(dataArray);
   
   while(dataArray.length > dxw){
        lengths.push(dataArray[dxw][1].length);
        dxw++;
    }

   for (let i = 0; i < dataArray.length; i++) {
      for (let yg = 0; yg < dataArray[i][1].length; yg++) {
          arr.push(dataArray[i][1][yg].split(","));
        
   }


   }

   //console.log(arr);
   //console.log(lengths);
   let newarray=[];
   let dgs=0;
   let wsda=0;
   let lenarr=[0];

   while(lengths.length> dgs){
      wsda+=lengths[dgs];
      lenarr.push(wsda);
      dgs++;

   }

   //console.log(lenarr);

   let dhfs=0;let dhsd=1;let qas=0;

   while (lenarr.length > qas){
       let rgds;
       if(dhfs == lenarr.indexOf(lenarr[lenarr.length-1])){
        rgds=lenarr[lenarr.length-1]- lenarr[lenarr.length-2];
       
       }else{
        rgds=lenarr[dhsd] - lenarr[dhfs];
        }
       
       newarray.push( [arr.splice(0, rgds )] );
       dhfs++;
       dhsd++;
       qas++;
   }
   newarray.pop();let jud=0;let fu=0;

   
   while(newarray.length > jud){
       while(newarray[jud][0].length >fu){
         newarray[jud][0][fu].shift();
         fu++;
       }
       fu=0;
   jud++
   }

   //console.log(newarray);

   let tgf=0;let judd=0;
   
   while(dataArray.length > tgf){
      dataArray[tgf].splice(1,1,newarray[tgf]);
   
      tgf++;
   }
   
   console.log(dataArray);

   od.innerHTML+=`
   <div id="rhfts">
    <H3 style="text-align:center;margin:auto;font-family:tahoma;font-size:20px;text-decoration:underline;">Memebrs Check In Average Data</H3>
    <TABLE BORDER="5"    WIDTH="50%"   CELLPADDING="2" CELLSPACING="2">
   
     <TR>
      <TH>TIME</TH>
      <TH>0 - 5</TH>
      <TH>6 - 10</TH>
      <TH>11 - 15</TH>
      <TH>16 - 20</TH>
      <TH>21 - 25</TH>
      <TH>26 - 30</TH>
      <TH>31 - 35</TH>
      <TH>36 - 40</TH>
      
    </TR>
    <TR ALIGN="CENTER" >
      <TD>Members Late</TD>
      <TD id="membersLate1" > 0 </TD>
      <TD id="membersLate2" > 0 </TD>
      <TD id="membersLate3" > 0 </TD>
      <TD id="membersLate4"  > 0 </TD>
      <TD id="membersLate5" > 0 </TD>
      <TD id="membersLate6"> 0 </TD>
      <TD id="membersLate7" > 0 </TD>
      <TD id="membersLate8" > 0 </TD>
      
    </TR>
    </TABLE>
    </div>
    `;
   
    let dataqw=[];let newdataqw=[];let stre="";let num=0;let yd=0;let altdnu=[]

    for (let i = 0; i < dataArray.length; i++) {
        for (let ii = 0; ii < dataArray[i][1][0].length; ii++) {
            //console.log(dataArray[i][1][0][ii][0])
             
            if(dataArray[i][1][0][ii][0] == datetext){
                if(dataArray[i][0] == dataArray[i][0]){
                    dataqw.push([dataArray[i][0] , dataArray[i][1][0][ii][1]])
                    //console.log(dataArray[i][0] +" "+ dataArray[i][1][0][ii][1])
                }
                
            }
    
            }
            
    }
    //console.log(dataqw);

   for (let i = 0; i < dataqw.length; i++) {
       if(dataqw[i][0]==dataqw[i][0]){
           stre=dataqw[i][0];
           newdataqw.push(stre);
           altdnu.push(parseInt(dataqw[i][1]))
           //console.log(stre);
       }
       
   }

    let newset=[...new Set(newdataqw)];

    //console.log(newdataqw);
    let numarr=[]

    while(newdataqw.length > yd){
        while(newset.length >num){
           if(newset[num] == newdataqw[yd]){
               //console.log(newset[num]+" "+newdataqw.indexOf(newdataqw[yd]))
               numarr.push(newdataqw.indexOf(newdataqw[yd]))
           }
           num++;
        }
        num=0;
        yd++;
    }

    //console.log(numarr);
    let newnumarr=[...new Set(numarr)];
    //newnumarr.push(dataqw.length)

    //console.log(newnumarr);
    //console.log(altdnu)

    let finalarrr=[];let dqx=0;let wsr0=0;let wsr1=1;let hfg=0;

    while(newnumarr.length > dqx){
        let azx=0;
        if(newnumarr[newnumarr.length-1] ==newnumarr[dqx]){
            azx=dataqw.length-newnumarr[newnumarr.length-1];
            //console.log(azx)
            finalarrr.push([newset[dqx],altdnu.splice(0,azx)]);
        }else{
        azx= newnumarr[wsr1]-newnumarr[wsr0];
        finalarrr.push([newset[dqx],altdnu.splice(0,azx)]);
        }
        dqx++;
    }

    let vbc=0;let rfgd=0;
    while(finalarrr.length> hfg){
        vbc=finalarrr[hfg][1].reduce((result,number)=> result+number);
        rfgd=vbc/finalarrr[hfg].length;
        finalarrr[hfg].pop();
        finalarrr[hfg].push(Math.round(rfgd));
        hfg++;
    }

    //console.log(finalarrr);

    let membersLate1=document.getElementById("membersLate1");let mla1=[];let mds1=[];let kmj1=[];
    let membersLate2=document.getElementById("membersLate2");let mla2=[];let mds2=[];let kmj2=[];
    let membersLate3=document.getElementById("membersLate3");let mla3=[];let mds3=[];let kmj3=[];
    let membersLate4=document.getElementById("membersLate4");let mla4=[];let mds4=[];let kmj4=[];
    let membersLate5=document.getElementById("membersLate5");let mla5=[];let mds5=[];let kmj5=[];
    let membersLate6=document.getElementById("membersLate6");let mla6=[];let mds6=[];let kmj6=[];
    let membersLate7=document.getElementById("membersLate7");let mla7=[];let mds7=[];let kmj7=[];
    let membersLate8=document.getElementById("membersLate8");let mla8=[];let mds8=[];let kmj8=[];
   
  
    for (let i = 0; i < finalarrr.length; i++) {
        if(finalarrr[i][1] >=0 && finalarrr[i][1] <=5){
            //console.log(finalarrr[i][1]);
             mla1.push(finalarrr[i][1])
             membersLate1.innerText=mla1.length;
             mds1.push(finalarrr[i][0]);

             kmj1.push(dataArray[i][2]);
             
             membersLate1.setAttribute("onclick",`openMembersLate("${kmj1}","${mds1}","0 - 5")`)
        }else if(finalarrr[i][1] >=6 && finalarrr[i][1] <=10){ 
             mla2.push(finalarrr[i][1])
             membersLate2.innerText=mla2.length;
             //console.log(dataArray[i][2])
             //console.log(finalarrr[i][0])
             kmj2.push(dataArray[i][2]);
             mds2.push(finalarrr[i][0]);
             membersLate2.setAttribute("onclick",`openMembersLate("${kmj2}","${mds2}","6 - 10")`)
        }else if(finalarrr[i][1] >=11 && finalarrr[i][1] <=15){
             mla3.push(finalarrr[i][1])
             membersLate3.innerText=mla3.length;
             mds3.push(finalarrr[i][0]);
             kmj3.push(dataArray[i][2]);
             membersLate3.setAttribute("onclick",`openMembersLate("${kmj3}","${mds3}","11 - 15")`)
        }else if(finalarrr[i][1] >=16 && finalarrr[i][1] <=20){
             mla4.push(finalarrr[i][1])
             membersLate4.innerText=mla4.length;
             mds4.push(finalarrr[i][0]);
             kmj4.push(dataArray[i][2]);
             membersLate4.setAttribute("onclick",`openMembersLate("${kmj4}","${mds4}","16 - 20")`)
        }else if(finalarrr[i][1] >=21 && finalarrr[i][1] <=25){
             mla5.push(finalarrr[i][1])
             membersLate5.innerText=mla5.length;
             mds5.push(finalarrr[i][0]);
             kmj5.push(dataArray[i][2]);

             membersLate5.setAttribute("onclick",`openMembersLate("${kmj5}","${mds5}","21 - 25")`)
        }else if(finalarrr[i][1] >=26 && finalarrr[i][1] <=30){
             mla6.push(finalarrr[i][1])
             membersLate6.innerText=mla6.length;
             mds6.push(finalarrr[i][0]);
             kmj6.push(dataArray[i][2]);
             membersLate6.setAttribute("onclick",`openMembersLate("${kmj6}","${mds2}","${mds6}","26 - 30")`)
        }else if(finalarrr[i][1] >=31 && finalarrr[i][1] <=35){
             mla7.push(finalarrr[i][1])
             membersLate7.innerText=mla7.length;
             mds7.push(finalarrr[i][0]);
             kmj7.push(dataArray[i][2]);
             membersLate7.setAttribute("onclick",`openMembersLate("${kmj7}","${mds2}","${mds7}","31 - 35")`)
        }else if(finalarrr[i][1] >=36 && finalarrr[i][1] <=40){
             mla8.push(finalarrr[i][1])
             membersLate8.innerText=mla8.length;
             mds8.push(finalarrr[i][0]);
             kmj8.push(dataArray[i][2]);
             membersLate8.setAttribute("onclick",`openMembersLate("${kmj8}","${mds2}","${mds8}","36 - 40")`)
        }
       
    }
  

    body.append(od);
}
    
}

function openMembersLate(){
   let veiwmeb=document.createElement("div");
   veiwmeb.id="veiwspecificMemb"
   let body =document.getElementById("body");
   let arg=[];
   
   for (var i = 0; i < arguments.length; i++) {
    arg.push(arguments[i])
   }
    console.log(arg)
    veiwmeb.style="width:40%;height:40%; overflow:auto;background-color:black; position:absolute;right:20%;left:20%;top:30%;"
    veiwmeb.innerHTML=`<h5 onclick="closeVeiwMemb()"style="margin:auto;cursor:pointer;color:red;font-size:21px;position:absolute;top:0;right:0;">X</h5>
    <h3 style="font-size:23px;margin:auto;text-decoration:underline;text-align:center;color:white;">Members late Between ${arg[arg.length-1]}</h3>
    `;

    setTimeout(() => {
        let veiwspecificMemb=document.getElementById("veiwspecificMemb");
        arg.pop();

        let argstr=arg[1].split(",");
        let codearr=arg[0].split(",");
        console.log(argstr)

        for (let i = 0; i < argstr.length; i++) {
            //for (let ii = 0; ii < codearr.length; ii++) {
                veiwspecificMemb.innerHTML+=`<h4 id="${codearr[i]}"style="cursor:pointer;
                text-align:center;color:rgb(218, 170, 74);
                font-size:23px;margin:auto;
                padding-top:10px;" onclick="openSpecificMemberPage('${codearr[i]}')">${argstr[i]}</h4>`
                
            //}
           
           //console.log(argstr[i])
       }
    }, 50);
    

    body.appendChild(veiwmeb)

}

function closeVeiwMemb(){
    let dsja=document.getElementById("veiwspecificMemb");
    dsja.parentNode.removeChild(dsja);
}

function openSpecificMemberPage(thq){
    let ordd=document.getElementById("ord");
    ordd.parentNode.removeChild(ordd);
    closeVeiwMemb();
    viewMember(thq);

}

</script>
