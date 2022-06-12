let menu = document.querySelector('#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   header.classList.toggle('active');
   document.body.classList.toggle('active');
}

window.onscroll = () =>{
   if(window.innerWidth < 991){
      menu.classList.remove('fa-times');
      header.classList.remove('active');
      document.body.classList.remove('active');
   }

   document.querySelectorAll('section').forEach(sec =>{

      let top = window.scrollY;
      let offset = sec.offsetTop - 150;
      let height = sec.offsetHeight;
      let id = sec.getAttribute('id');

      if(top >= offset && top < offset + height){
         document.querySelectorAll('.header .navbar a').forEach(links =>{
            links.classList.remove('active');
            document.querySelector('.header .navbar a[href*='+ id +']').classList.add('active')
         });
      };

   });

}
//digital clock
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


