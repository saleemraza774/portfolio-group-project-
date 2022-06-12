// setInterval(clock, 1000);
// function clock(){
//     let d=new Date();
//     h= d.getHours();
//     m=d.getMinutes();
//     s=d.getSeconds();

//   let  hrotation=30*h+m/2;
//   let mRotation=6*m;
//   let sRotation=6*s;
  
// // let hour=document.getElementById("hour");
// // let min=document.getElementById("min");
// // let sec=document.getElementById("sec");

// hour.style.transform='rotate(${hrotation}deg)';
// min.style.transform='rotate(${mRotation}deg)';
// sec.style.transform='rotate(${sRotation}deg)';

// }
setInterval(() => {
  let date=new Date();
  h= date.getHours();
  m=date.getMinutes();
  s=date.getSeconds();
  
let  hrotation=30*h+m/2;
let mRotation=6*m;
let sRotation=6*s;

let hour=document.getElementById("hour");
 let min=document.getElementById("min");
 let sec=document.getElementById("sec");

hour.style.transform=`rotate(${hrotation}deg)`;
min.style.transform=`rotate(${mRotation}deg)`;
sec.style.transform=`rotate(${sRotation}deg)`;

}, 1000);