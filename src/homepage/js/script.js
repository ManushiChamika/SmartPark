// Function to handle navigation to the login page
function goToLoginPage() {
  window.location.href = 'admin.php';
}
// Function to handle navigation to the signup page
function goToSignupPage() {
  window.location.href = 'signup.php';
}
// Adding event listeners to the login and signup buttons
document.getElementById('loginBtn').addEventListener('click', goToLoginPage);
document.getElementById('signupBtn').addEventListener('click', goToSignupPage);


let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});