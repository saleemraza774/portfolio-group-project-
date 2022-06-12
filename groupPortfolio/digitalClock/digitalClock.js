let id= setInterval(digitalClock ,1000);



function  digitalClock(){
    
let d=new Date();
let h=d.getHours();
let m=d.getMinutes();
let s=d.getSeconds();

if(h>12){
    let ampm=document.getElementById("ap").innerHTML="PM";
}else{
    let ampm=document.getElementById("ap").innerHTML="AM";


}

if(h>=12){
    h=h-12;
}

if(h<10){
    h= "0"+h;
}
if(m<10){
    m= "0"+m;
}
if(s<10){
    s= "0"+s;
}






let hour= document.getElementById("hour").innerHTML=h;
let sec= document.getElementById("sec").innerHTML=s;
let min= document.getElementById("min").innerHTML=m;

}

