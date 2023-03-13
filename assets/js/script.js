// slider
const slider = [
  {
  id: 1,
  head: "Delicious",
  subhead:"Satisfy Your Hunger",
  para:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam et lacus vitae egestas laoreet. Ipsum amet, etiam id volutpat iaculis sagittis, volutpat et ul lamcorper. Maecenas ut dui proin sapien quis amet lobortis. Diam commodo pul vinar elit quisque fringilla tincidunt sit. Vitae diam ",
  img:"assets/image/food-logo.png", 
},
  {
  id: 2,
  head: "Delicious",
  subhead:" Your Hunger",
  para:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam et lacus vitae egestas laoreet. Ipsum amet, etiam id volutpat iaculis sagittis, volutpat et ul lamcorper. Maecenas ut dui proin sapien quis amet lobortis. Diam commodo pul vinar elit quisque fringilla tincidunt sit. Vitae diam ",
  img:"assets/image/gallery2.png", 
},
  {
  id: 3,
  head: "Delis",
  subhead:"Satisfy Your Hunger",
  para:"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quam et lacus vitae egestas laoreet. Ipsum amet, etiam id volutpat iaculis sagittis, volutpat et ul lamcorper. Maecenas ut dui proin sapien quis amet lobortis. Diam commodo pul vinar elit quisque fringilla tincidunt sit. Vitae diam ",
  img:"assets/image/gallery3.png", 
},
];


const heads = document.getElementById("head");
const subheads = document.getElementById("sub-head");
const paras = document.getElementById("para");
const imgs = document.getElementById("img");

const prevBtn = document.querySelector(".img-1");
const nxtBtn = document.querySelector(".img-2");

let currentItems = 0;

window.addEventListener("DOMContentLoaded",function(){
  showSlider();
});

function showSlider(){
  const item = slider[currentItems];
    imgs.src = item.img;
    heads.textContent = item.head;
    subheads.textContent = item.subhead;
    paras.textContent = item.para;
}

nxtBtn.addEventListener('click',function(){
   currentItems++;
   if(currentItems > slider.length -1){
    currentItems = 0;
   };
   showSlider(); 
});

prevBtn.addEventListener('click',function(){
   currentItems--;
   if(currentItems < 0){
    currentItems = slider.length -1;
   };
   showSlider(); 
});



// pre loader
// var loader = document.querySelectorAll(".preloader");
// $(window).on('load',function() {
//   $('.preloader').hide();
// });


$(document).ready(function(){
  $('.slider').slick({
    slidesToShow: 1,
    dots:true,
    centerMode: true,
    centerPadding: "15%",
    speed: 500
  });
});

$(document).ready(function () {
var gallery = $('.gallery a').simpleLightbox({
  });
});
  
function changeBg(){
  var navbar = document.querySelector('header');
  var scrollValue = window.scrollY;
  
  if(scrollValue < 10){
    navbar.classList.remove('bg-navbar');
  }else{
    navbar.classList.add('bg-navbar');
  }
}
window.addEventListener('scroll',changeBg);


$(window).scroll(function(){
  if($(this).scrollTop()>0){
    $('.navbar-about').addClass("sticky");
  }else 
  {
    $('.navbar-about').removeClass("sticky");
  }
});


function scrollnav(){
  var navbar = document.querySelector('header');
  var scrollValue = window.scrollY;
  if(scrollValue < 150){
    navbar.classList.remove('bg-navbar');
  }else{
    navbar.classList.add('bg-navbar');
  }
}
window.addEventListener('scroll',scrollnav);

// $(document).ready(function () {
//     $('.slider-wrapper').slick({
//         dots: false,
//         arrows: true,
//         autoplay: false,
//         autoplaySpeed: 2000,
//         fade: true,
//         fadeSpeed: 1000,
//         adaptiveHeight:true,
//         prevArrow: '<div class="img-1"><img src="assets/image/left-arrow.png" alt=""></div>',
//         nextArrow: '<div class="img-2"><img src="assets/image/right-arrow.png" alt=""></div>'
//     });
// });




$(document).ready(function () {
    $('.slicker-wrapper').slick({
        infinite: true,
        arrows: false,
        dots:true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1
    });
});



$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  autoplay:false,
  autoplay:1500,
  arrows:true,
  infinite: true,
  centerMode: true,
  focusOnSelect: true,
  prevArrow: '<div class="img-3"><img src="assets/image/prev.png" alt=""></div>',
  nextArrow: '<div class="img-4"><img src="assets/image/next.png" alt=""></div>'
});
				

// Open the Modal
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


