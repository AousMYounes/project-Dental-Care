let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.header .nav1');
let header=document.querySelector('.header');

menu.onclick= () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll= () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
   if(window.scrollY > 0){
    header.classList.add('active');
   }else{
    header.classList.remove('active');
   }
}
let button_list=document.querySelector('#button_list');
button_list.addEventListener("click",function(e){
    e.preventDefault();
    setTimeout(()=>{
        window.location="index1.php"
    },1000)
    
});