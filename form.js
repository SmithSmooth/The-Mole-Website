let uniqCodeinput=document.getElementById("uniquecode")

function giveUniqueCode(){
let a=4;
let b=0;
let arrnum=[]
let arrletters=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t',
'u','v','w','x','y','z'];
let garrlet=[]
let e=0;
let f=4;
while(a>b){
    let c=Math.floor(Math.random()*(10-1)+1);
    arrnum[b]=c;
    b++;
}
while (f>e){
    let c=Math.floor(Math.random()*(26-1)+1);
    garrlet[e]=arrletters[c];
    e++;
}

let result= arrnum.concat(garrlet)
let resultCode=result.join('');
uniqCodeinput.value=resultCode

}