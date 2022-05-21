<html>
    <head>
        <title>Pet Society</title>
        <link rel = "stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Fredoka+One&family=Open+Sans:wght@500&family=Palette+Mosaic&family=Rubik:wght@500&family=Varela+Round&display=swap" rel="stylesheet">
    </head>

    <body>
       
        <?php 
            include ("inc/db.php");
            include ("inc/function.php");
            include ("inc/header.php"); 
            include ("inc/navbar.php"); 
            ?>
             <div id='main'>
            <div class="slider">
           

            <div class="carousel-container">
  <div class="mySlides animate">
    <img src="../uploads/slide1.png" alt="slide" />
    <div class="number">1 / 5</div>
  </div>

  <div class="mySlides animate">
    <img src="../uploads/slide2.png" alt="slide" />
    <div class="number">2 / 5</div>
  </div>

  <div class="mySlides animate">
    <img src="../uploads/slide3.png" alt="slide" />
    <div class="number">3 / 5</div>
  </div>

  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="prevSlide()">&#10094;</a>
  <a class="next" onclick="nextSlide()">&#10095;</a>

  <!-- The dots/circles -->
  <div class="dots-container">
    <span class="dots" onclick="currentSlide(1)"></span>
    <span class="dots" onclick="currentSlide(2)"></span>
    <span class="dots" onclick="currentSlide(3)"></span>

  </div>
</div>


    </div>
            </div>
            <div class="textes">
                <div class="phar">
                <img src="../uploads/textes.png" class = 'imges'>
                </div>
                <div class="imgPic">
                    
                    <p class = 'sayings' >The real road of compassion, that is, giving, helping, assistance and community service, is a road that can be set and declared as your life's purpose</p><br>
                <p class = 'auth'> - Byron Pulsifer</p>
                </div>
               
            </div>
            <div class="under">
                <p class = 'sayings2' >What PetSociety do?</p><br>
                <p class = 'smaller' >We found out that most of the time when you donate theres no reward for your good deeds. Thats the reason why we create an agreement between petcenters that they'll give you atleast 2% of discount or higher if you donate directly to the organizations.</p>
                <p class="smaller">Our job is to give information about the organizations, and to check or validate if you donate to those organization by sending us the proof of transaction between you and the organization, if you donate and choose not to inform us it's still okay but youll not be given for the coupon code to claim your discount</p>
            </div>
            <a href = '../petcenter/signup.php' class = 'toSignup'>
            <div class="underist">
                <div class="lefter">
                    <img  class = 'leftrImg' src="../uploads/becomePartner.gif" >
                </div>
                <div class="righter">
                    <p class = 'rightist' >Become one of our Petcenters? :></p>
                    <p class = 'smaller2' >By applying so, you can enjoy many benefits from us. To name a few, you can broaden your scope since this is an online platform, and encourage many people to book appointments or make reservations online with just a click of your fingertip. Most importantly, it will boost your business. You can also help many pet organizations by encouraging people to donate thru coupons and discounts! What are you waiting for? Be part of the family, be part of Pet Society!</p>
                </div>
            </div>
            </a>
            <div class="orgs">
                <h3 class="headister">Our Selected Organizations</h3><br>
            <div class = 'fDogs'>
                  <?php donate(); ?>
                </div>
            </div>
               
               
                  </div>
                  <?php
                    include ("inc/footer.php"); 
                  ?>
    </body>
    <style>
        .toSignup{
            text-decoration: none;
        }
       .underist{
           display: flex;
           width: 80%;
           margin: 30px 10% 10px 10%;
           height: 20vh;
           box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
           
       }
       .rightist{
           font-size: 18px;
           padding: 10px;
           font-weight: bold;
           color: #777;
           text-decoration: none;
       }
       .smaller2{
        font-size: 14px;
           padding: 10px;
           color: #777;
           text-decoration: none;
       }
       .lefter{
           width: 20%;
       }
       .leftrImg{
           height: 100%;
       }
        :root {
  --primary-color: slategrey;
}

.slider{
  font-family: "@Microsoft YaHei Light";
  background: #fafafa;
  display: flex;
  justify-content: center;
  overflow: hidden;
  width: 100vw;
  z-index: 1;
}

.carousel-container {
 
  width: 100vw;

  box-shadow: 0 0 30px -20px #223344;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
.mySlides img {
  display: block;
  width: 100%;
}

/* image gradient overlay [optional] */
/*  .mySlides::after {
  content: "";
  position: absolute;
  inset: 0;
    background-image: linear-gradient(-45deg, rgba(110, 0, 255, .1), rgba(70, 0, 255, .2));
} */

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  transform: translate(0, -50%);
  width: auto;
  padding: 20px;
  color: white;
  font-weight: bold;
  font-size: 24px;
  border-radius: 0 8px 8px 0;
  background: rgba(173, 216, 230, 0.1);
  user-select: none;
}
.next {
  right: 0;
  border-radius: 8px 0 0 8px;
}
.prev:hover,
.next:hover {
  background-color: rgba(173, 216, 230, 0.3);
}

/* Caption text */
.text {
  color: #f2f2f2;
  background-color: rgba(10, 10, 20, 0.1);
  backdrop-filter: blur(6px);
  border-radius: 10px;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 60px;
  left: 50%;
  transform: translate(-50%);
  text-align: center;
}

/* Number text (1/3 etc) */
.number {
  color: #f2f2f2;
  font-size: 16px;
  background-color: rgba(173, 216, 230, 0.15);
  backdrop-filter: blur(6px);
  border-radius: 10px;
  padding: 8px 12px;

  top: 10px;
  left: 10px;
  display: none;
}
.orgs{
    margin: 10% 5% 20% 5%;
    width: 90%;
}
/* The dots/bullets/indicators */
.dots {
  cursor: pointer;
  height: 14px;
  width: 14px;
  margin: 0 4px;
  background-color: rgba(173, 216, 230, 0.2);
  backdrop-filter: blur(2px);
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease;
  display: none;
}
.active,
.dots:hover {
  background-color: rgba(173, 216, 230, 0.8);
}

/* transition animation */
.animate {
  -webkit-animation-name: animate;
  -webkit-animation-duration: 1s;
  animation-name: animate;
  animation-duration: 2s;
}
#lowerSide{

}
 /* @keyframes animate {
  from {
    transform: scale(1) rotateY(0deg);
  }
  to {
    transform: scale(1) rotateY(0deg);
  }
}  */

/* 
@-webkit-keyframes slide {
    100% { left: 0; }
}

@keyframes slide {
    100% { left: 0; }
}  */
.textes{
    width: 90%;
    margin-left: 5%;
    padding: 10px;
    margin-top: 50px;
    display: flex;
  
}
.under
{
    width: 90%;
    margin-left: 5%;
    padding: 10px;
    margin-top: 50px;
    line-height: 2;
    border-bottom: 1px solid #333;

}
.sayings{

    font-weight: bold;
    font-size: 28px;
    color: #0080fe;
    font-family: "Varela Round", sans-serif;
}
.sayings2{

font-weight: bold;
font-size: 30px;
color: #333;
font-family: "Varela Round", sans-serif;
}
.samller{
    font-size: 12px; 
  
    
}
.phar{
    width: 50%;
    height: 300px;
}
.auth{
    float: right;
    color: #0080fe;
}
.imgPic{
    width: 40%;
    height: 300px;

}
.imges{
    height: 100%;
    float: left;
    margin-left: 20%;
}
    </style>


    <script>
        let slideIndex = 0;
showSlides();

// Next-previous control
function nextSlide() {
  slideIndex++;
  showSlides();
  timer = _timer; // reset timer
}

function prevSlide() {
  slideIndex--;
  showSlides();
  timer = _timer;
}

// Thumbnail image controlls
function currentSlide(n) {
  slideIndex = n - 1;
  showSlides();
  timer = _timer;
}

function showSlides() {
  let slides = document.querySelectorAll(".mySlides");
  let dots = document.querySelectorAll(".dots");

  if (slideIndex > slides.length - 1) slideIndex = 0;
  if (slideIndex < 0) slideIndex = slides.length - 1;
  
  // hide all slides
  slides.forEach((slide) => {
    slide.style.display = "none";
  });
  
  // show one slide base on index number
  slides[slideIndex].style.display = "block";
  
  dots.forEach((dot) => {
    dot.classList.remove("active");
  });
  
  dots[slideIndex].classList.add("active");
}

// autoplay slides --------
let timer = 5; // sec
const _timer = timer;

// this function runs every 1 second
setInterval(() => {
  timer--;

  if (timer < 1) {
    nextSlide();
    timer = _timer; // reset timer
  }
}, 1000); // 1sec
    </script>
</html>