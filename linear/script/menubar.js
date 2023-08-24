//navbar 
const navbar = document.querySelector(".navbar");
const btn = document.querySelector(".mobile-nav-icon"); 
let closeBtn = document.querySelector(".close");
btn.addEventListener('click',function fun(){
      navbar.classList.toggle('active');
      btn.style.display = "none";
      closeBtn.style.display = "block";
  });
  closeBtn.addEventListener('click',function(){
    navbar.classList.toggle('active');
    btn.style.display = "block";
  });