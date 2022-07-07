

let toplinenav = document.getElementById("topline");
let body = document.getElementById("body");

function openNavbar() {
    let h3AboutUs = document.createElement("h3");
    let h3ContactUs = document.createElement("h3");
    let h3GetStarted = document.createElement("h3");
    let h3close = document.createElement("h3");
    let putContent = document.createElement("div")
    
    toplinenav.style = "visibility:hidden;"

    putContent.className = "putContent";
    putContent.id = "putContent";

   
    h3AboutUs.className = "createdH3"
    h3ContactUs.className = "createdH3"
    h3GetStarted.className = "createdH3"
    h3close.className = "closeNav"

    h3GetStarted.innerText = "Get Started";
    h3AboutUs.innerText = "About Us";
    h3ContactUs.innerHTML=`<a href="#ContactUs" style="text-decoration: none;  color: rgb(153, 125, 125);">Contact Us</a>`
    //h3ContactUs.innerText = "Contact Us";
    
    h3close.innerText = "x";


    h3close.setAttribute("onclick", "closeNav()");
    h3AboutUs.setAttribute("onclick", "openAboutUs()");
    //h3ContactUs.setAttribute("onclick", "openContactUs()");
    h3GetStarted.setAttribute("onclick", "getStarted()");


    body.appendChild(putContent);
    putContent.appendChild(h3close);
    putContent.appendChild(h3GetStarted)
    putContent.appendChild(h3AboutUs);
    putContent.appendChild(h3ContactUs);


}

function closeNav() {
    let putContent = document.getElementById("putContent")
    putContent.remove(putContent);
    topline.style = "visibility:visible;"
}

function getStarted() {
    let nD=document.getElementById("newDivv");
    if(nD ==null){

    let newDiv = document.createElement("div");
    let registerDiv = document.createElement("div");
    let logInDiv = document.createElement("div");

    registerDiv.id = "registerDiv";
    logInDiv.id = "logInDiv";
    newDiv.id = "newDivv"

    registerDiv.innerHTML = `
    <div onclick="closeRegLogIn()" >Close</div>
    <h3>Register As</h3>
    <button class="reg" onclick="openOrgRegPage()">Organisation</button>
    <button class="reg" onclick="openMembRegPage()">Member</button>
    
    `
    logInDiv.innerHTML = `
    <div onclick="closeRegLogIn()" >Close</div>
    <h3>Log In As</h3>
    <button class="log" onclick="openOrgLogInPage()" >Organisation</button>
    
    `
    //<button class="log" onclick="openMembLoginPage()">Member</button>
    newDiv.appendChild(registerDiv);
    newDiv.appendChild(logInDiv);

    body.appendChild(newDiv);
    
}


}

function closeRegLogIn(){
    let newDiv=document.getElementById("newDivv");
    
    newDiv.parentNode.removeChild(newDiv);
}


function openOrgRegPage(){
    window.location="form.html";
}
function openMembRegPage(){
    window.location="membReg.html";
}

function openOrgLogInPage(){
    window.location="login.html";
}

function openMembLoginPage(){
    //log in in the app
}
function openAboutUs(){
    window.location="./aboutUs/aboutUs.html"
}